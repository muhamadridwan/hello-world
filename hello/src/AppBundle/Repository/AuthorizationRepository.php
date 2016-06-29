<?php
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManager;

class AuthorizationRepository 
{
	private $em;
	private $menuRepo;
	function __construct(EntityManager $em)
	{
		$this->em = $em;
		$this->menuRepo = $this->em->getRepository("AppBundle:TMenu");
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
}
?>