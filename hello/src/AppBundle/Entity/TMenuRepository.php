<?php
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class TMenuRepository extends EntityRepository
{
	private function findAllAuthorizedMenu($userGroupID, $menuPID)
	{
		$qb = $this->createQueryBuilder("m");
		$qb->innerJoin("AppBundle:TPrivilege", "p", "WITH", "m = p.menu");
		$qb->innerJoin("AppBundle:TUserGroup", "grp", "WITH", "p.userGroup = grp");
		
		$qb->where($qb->expr()->eq("m.isActive","1"));
		$qb->andWhere($qb->expr()->eq("grp.userGroupId", ":userGroupID"));
		$qb->andWhere($qb->expr()->eq("m.menuPid", ":menuPID"));

		$qb->setParameters(array(
			"userGroupID"=> $userGroupID,
			"menuPID" => $menuPID));
		
		$dbResult = $qb->getQuery()->getResult();

		$result = array();

		if($dbResult)
		{
			foreach($dbResult as $m)
			{
				array_push($result,array("m" => $m, "subMenu" => $this->findByUserGroupID_Menu($userGroupID, $m->getMenuId())));
			}	
		}

		return $result;
	}
}
?>