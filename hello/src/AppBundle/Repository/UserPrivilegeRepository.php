<?php
namespace AppBundle\Repository;

use Doctrine\ORM\EntityManager;

class UserPrivilegeRepository 
{
	private $em;
	private $privilegeRepo;
	private $menuRepo;
	function __construct(EntityManager $em)
	{
		$this->em = $em;
		$this->privilegeRepo = $this->em->getRepository("AppBundle:TPrivilege");
		$this->menuRepo = $this->em->getRepository("AppBundle:TMenu");
	}

	public function getPrivilegeByUsergoupId($userGroupID)
	{
		
		$qb = $this->privilegeRepo->createQueryBuilder("p");
		$qb->rightJoin("AppBundle:TMenu", "m", "WITH", $qb->expr()->andX($qb->expr()->eq('p.menu', 'm'), $qb->expr()->eq('p.userGroup.userGroupID', ':userGroupID')));
		
		$qb->where($qb->expr()->eq("m.isActive","true"));
		$qb->orderBy('m.menuSeq', 'ASC');
		$qb->setParameters(array(
			"userGroupID"=> $userGroupID));
		
		$dbResult = $qb->getQuery()->getResult();

		return $dbResult;
	}
}
?>