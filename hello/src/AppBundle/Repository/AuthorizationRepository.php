<?php 
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class AuthorizationRepository extends EntityRepository
{
	function __construct()
	{}

	/*public function getMenu($userGroupID)
	{
		$em = $this->getEntityManager();
		$qb = $this->getEntityManager->createQueryBuilder("m");
		$qb->select("m");
		$qb->from("AppBundle:TMenu", "m");
		$qb->innerJoin("m","AppBundle:TPrivilege", "p", "p.menu = m");
		$qb->where($qb->expr()->eq("m.isActive = 1"));
		$qb->andWhere($qb->expr()->eq("p.userGroup.userGroupID = ?1"));
		$qb->andWhere($qb->expr()->orX("m.menuPid = ''", "m.menuPid = null"));

		$query->setParameter(1, $userGroupID);
		
		return $query->getResult();
	}*/

	private function findByUserGroupID_Menu($userGroupID, $menuPID)
	{
		$qb = $this->getEntityManager()->createQueryBuilder();
		$qb->select("m");
		$qb->from("AppBundle:TMenu", "m");
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