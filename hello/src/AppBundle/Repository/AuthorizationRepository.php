<?php
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Query\ResultSetMapping;


class AuthorizationRepository 
{
	private $em;
	private $menuRepo;
	private $privilegeRepo;
	private $usergroupRepo;
	function __construct(EntityManager $em)
	{
		$this->em = $em;
		$this->menuRepo = $this->em->getRepository("AppBundle:TMenu");
		$this->privilegeRepo = $this->em->getRepository("AppBundle:TPrivilege");
		$this->usergroupRepo = $this->em->getRepository("AppBundle:TUsergroup");
	}

	public function getAuthorizedMenu($userGroupID, $menuPID)
	{
		$qb = $this->menuRepo->createQueryBuilder("m");
		$qb->innerJoin("AppBundle:TPrivilege", "p", "WITH", "m = p.menu");
		$qb->innerJoin("AppBundle:TUserGroup", "grp", "WITH", "p.userGroup = grp");
		
		$qb->where($qb->expr()->eq("m.menuPid", ":menuPID"));
		$qb->andWhere($qb->expr()->eq("grp.userGroupId", ":userGroupID"));
		$qb->andWhere($qb->expr()->eq("m.isActive","true"));
		$qb->andWhere($qb->expr()->eq("p.pAccess", "true"));
		$qb->orderBy('m.menuSeq', 'ASC');
		$qb->setParameters(array(
			"userGroupID"=> $userGroupID,
			"menuPID" => $menuPID));
		
		$dbResult = $qb->getQuery()->getResult();

		$result = array();

		if($dbResult)
		{
			foreach($dbResult as $m)
			{
				array_push($result,array("m" => $m, "subMenu" => $this->getAuthorizedMenu($userGroupID, $m->getMenuId())));
			
			}	
		}

		return $result;
	}

	public function getMenuPrivilegeByUsergoupId($userGroupID)
	{
		$sql = "
		SELECT 	
			a.menu_id AS menu_id, 
			a.menu AS menu, 
			a.menu_pid AS menu_pid,
			:userGroupID AS user_group_id,
			CASE WHEN b.p_access IS NULL THEN false ELSE b.p_access END AS p_access, 
			CASE WHEN b.p_create IS NULL THEN false ELSE b.p_create END AS p_create, 
			CASE WHEN b.p_retrieve IS NULL THEN false ELSE b.p_retrieve END AS p_retrieve, 
			CASE WHEN b.p_update IS NULL THEN false ELSE b.p_update END AS p_update, 
			CASE WHEN b.p_delete IS NULL THEN false ELSE b.p_delete END AS p_delete
		FROM	
			t_menu a
		LEFT JOIN t_privilege b  on b.menu_id = a.menu_id and b.user_group_id = :userGroupID
		WHERE 
			a.is_active = true
		ORDER BY a.menu_seq
		";
	
		$params = array('userGroupID'=>$userGroupID);
		
		$stmt = $this->em->getConnection()->prepare($sql);
		$stmt->execute($params);
		$dbResult = $stmt->fetchAll();
		//print_r($dbResult);
		return $dbResult;
	}

	public function savePrivileges($data, $userGroupId)
	{
		$this->em->getConnection()->beginTransaction(); // suspend auto-commit
		try 
		{
			$qb = $this->em->createQueryBuilder();
		    $query = $qb->delete('AppBundle:TPrivilege', 'p')
		            ->where('p.userGroup = :userGroup')
		            ->setParameter('userGroup', $this->usergroupRepo->find($userGroupId))
		            ->getQuery();

			$query->execute();

			foreach($data["privileges"] as $p)
			{
				$sql = "
						INSERT INTO t_privilege 
							(menu_id, user_group_id, p_access,
							 p_create, p_retrieve, p_update, p_delete)
						VALUES	
							(:menu_id, :user_group_id, :p_access,
							 :p_create, :p_retrieve, :p_update, :p_delete)
						";

				$stmt = $this->em->getConnection()->prepare($sql);
				//$qb->setParameter('isOther', false, \PDO::PARAM_BOOL);
				$stmt->bindParam( ":menu_id", $p["menu_id"]);
				$stmt->bindParam( ":user_group_id", $p["user_group_id"]);
				
				$stmt->bindParam( ":p_access", $p["p_access"], \PDO::PARAM_BOOL );
				$stmt->bindParam( ":p_create", $p["p_create"], \PDO::PARAM_BOOL );
				$stmt->bindParam( ":p_retrieve", $p["p_retrieve"], \PDO::PARAM_BOOL );
				$stmt->bindParam( ":p_update", $p["p_update"], \PDO::PARAM_BOOL );
				$stmt->bindParam( ":p_delete", $p["p_delete"], \PDO::PARAM_BOOL );
				
				$stmt->execute();
			}

		    $this->em->getConnection()->commit();
		} catch (Exception $e) {
		    $this->em->getConnection()->rollBack();
		    throw $e;
		}
		
	}
}
?>