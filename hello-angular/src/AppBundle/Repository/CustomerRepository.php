<?php
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManager;

class CustomerRepository 
{
	private $em;
	private $customerRepo;
	function __construct(EntityManager $em)
	{
		$this->em = $em;
		$this->customerRepo = $this->em->getRepository("AppBundle:Customer");
	}

	public function addCustomer($customer)
	{
		$this->em->persist($customer);
		$this->em->flush();
	}

	public function deleteCustomer($customer_id)
	{
		$customer = $this->getCustomerById($customer_id);
		if($customer==null)
		{
			return "There is no customer with id ".$id.".";
		}

		try
		{
			$this->em->remove($customer);
			$this->em->flush();
		}
		catch(\Exception $e)
		{
			return $e->getMessage();
		}
	}

	public function getCustomerById($customer_id)
	{
		$qb = $this->customerRepo->createQueryBuilder("c");
		$qb->where($qb->expr()->eq("c.customerId",":customerId"));

		$qb->setParameters(array(
			"customerId"=> $customer_id));
		
		return $qb->getQuery()->getSingleResult();

	}


	public function editCustomer($customer, $modifiedCustomer)
	{
		$customer->setUser($modifiedCustomer->getUser());
		$customer->setPersonalId($modifiedCustomer->getPersonalId());
		$customer->setCustomerName($modifiedCustomer->getCustomerName());
		$customer->setCustomerFullname($modifiedCustomer->getCustomerFullname());
		$customer->setCustomerAddress($modifiedCustomer->getCustomerAddress());
		$customer->setPhoneNumber($modifiedCustomer->getPhoneNumber());
		$customer->setEmail($modifiedCustomer->getEmail());
		$customer->setPicture($modifiedCustomer->getPicture());
		
		$this->em->flush();
	}

	public function getAllCustomer()
	{
		$qb = $this->customerRepo->createQueryBuilder("c");
		$qb->where($qb->expr()->eq("c.isRestoTable","false"));
		
		return $qb->getQuery()->getResult();
	}

	public function getAllRestoTable()
	{
		$qb = $this->customerRepo->createQueryBuilder("c");
		$qb->where($qb->expr()->eq("c.isRestoTable","true"));
		
		return $qb->getQuery()->getResult();
	}
}
?>