<?php 
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class CustomerReposotory extends EntityRepository
{
	public function getAllCustomer($limit, $start)
	{
		$query = $this->getEntityManager->createQuery("SELECT c FROM AppBundle:Customer c ORDER BY c.customerName ASC LIMIT ?1 OFFSET ?2 ");

		$query->setParameter(1, $limit);
		$query->setParameter(2, $start);
		
		return $query->getResult();
	}

	public function getTotalCustomer()
	{
		 return $this->getEntityManager()
        ->createQuery('SELECT COUNT(c) FROM AppBundle:Customer c')
        ->getSingleScalarResult();
		
	}
}
?>