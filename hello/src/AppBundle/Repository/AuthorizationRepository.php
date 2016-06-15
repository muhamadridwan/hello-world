<?php 
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class AuthorizationRepository extends EntityRepository
{
	function __construct()
	{}
	$em = $this->getDoctrine()->getManager();
	public function getMenu($userGroupID)
	{
		$qb = $this->getEntityManager->createQueryBuilder("m");
		$qb->select("m");
		$qb->from("AppBundle:TMenu", "m");
		$qb->innerJoin("m","AppBundle:TPrivilege", "p", "p.menu = m");
		$qb->where($qb->expr()->eq("m.isActive = 1"));
		$qb->andWhere($qb->expr()->eq("p.userGroup.userGroupID = ?1"));
		$qb->andWhere($qb->expr()->orX("m.menuPid = ''", "m.menuPid = null"));

		$query->setParameter(1, $userGroupID);
		
		return $query->getResult();
	}

}
?>