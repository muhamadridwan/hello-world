<?php
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManager;

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
		$qb = $this->em->createNativeQuery("
			SELECT 	
				a.menu_id, a.menu, a.menu_pid, b.p_access, 
				b.p_create, b.p_retrieve, b.p_update, b.p_delete
			FROM	
				t_menu a
			LEFT JOIN t_privilege b  on b.menu_id = a.menu_id and b.user_group_id = :userGroupID
			WHERE 
				a.is_active = 1
			ORDER BY a.menu_seq
			"
			);
		$qb->setParameters(array(
			"userGroupID"=> $userGroupID));
		
		$dbResult = $qb->getQuery()->getArrayResult();

		return $dbResult;
	}
}
?>