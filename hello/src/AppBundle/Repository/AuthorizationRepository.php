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
	function __construct(EntityManager $em)
	{
		$this->em = $em;
		$this->menuRepo = $this->em->getRepository("AppBundle:TMenu");
		$this->privilegeRepo = $this->em->getRepository("AppBundle:TPrivilege");
	}

	public function getAuthorizedMenu($userGroupID, $menuPID)
	{
		$qb = $this->menuRepo->createQueryBuilder("m");
		$qb->innerJoin("AppBundle:TPrivilege", "p", "WITH", "m = p.menu");
		$qb->innerJoin("AppBundle:TUserGroup", "grp", "WITH", "p.userGroup = grp");
		
		$qb->where($qb->expr()->eq("m.isActive","1"));
		$qb->andWhere($qb->expr()->eq("grp.userGroupId", ":userGroupID"));
		$qb->andWhere($qb->expr()->eq("m.menuPid", ":menuPID"));
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
			CASE WHEN b.p_access IS NULL THEN 0 ELSE b.p_access END AS p_access, 
			CASE WHEN b.p_create IS NULL THEN 0 ELSE b.p_create END AS p_create, 
			CASE WHEN b.p_retrieve IS NULL THEN 0 ELSE b.p_retrieve END AS p_retrieve, 
			CASE WHEN b.p_update IS NULL THEN 0 ELSE b.p_update END AS p_update, 
			CASE WHEN b.p_delete IS NULL THEN 0 ELSE b.p_delete END AS p_delete
		FROM	
			t_menu a
		LEFT JOIN t_privilege b  on b.menu_id = a.menu_id and b.user_group_id = :userGroupID
		WHERE 
			a.is_active = 1
		ORDER BY a.menu_seq
		";
	
		$params = array('userGroupID'=>$userGroupID);
		
		$stmt = $this->em->getConnection()->prepare($sql);
		$stmt->execute($params);
		$dbResult = $stmt->fetchAll();
		//print_r($dbResult);
		return $dbResult;
	}
}
?>