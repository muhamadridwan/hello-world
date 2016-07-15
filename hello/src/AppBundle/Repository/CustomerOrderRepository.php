<?php
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManager;

class CustomerOrderRepository 
{
	private $em;
	private $customerOrderRepo;
	function __construct(EntityManager $em)
	{
		$this->em = $em;
		$this->customerOrderRepo = $this->em->getRepository("AppBundle:CustomerOrder");
	}

	public function addCustomerOrder($custOrder)
	{
		$this->em->persist($custOrder);
		$this->em->flush();
	}

	public function deleteCustomerOrder($customer_order_id)
	{
		$custOrder = $this->getCustomerOrderById($customer_order_id);
		$this->em->remove($custOrder);
		$this->em->flush();
	}

	public function getCustomerOrderById($employee_id)
	{
		return $this->customerOrderRepo->find($id);

	}

	public function editCustomerOrder($custOrder, $modifiedCustOrder)
	{
		//$employee->setUser($modifiedEmployee->getUser());
		$custOrder->setCustomer($modifiedCustOrder->getCustomer());
		$custOrder->setOrderDate($modifiedCustOrder->getOrderDate());
		$custOrder->setCashier($modifiedCustOrder->getCashier());
		$custOrder->setOrderType($modifiedCustOrder->getOrderType());
		$custOrder->setPayment($modifiedCustOrder->getPayment());
		$custOrder->setPaymentMethod($modifiedCustOrder->getPaymentMethod());
		$custOrder->setOrderStatus($modifiedCustOrder->getOrderStatus());
		$custOrder->setCourier($modifiedCustOrder->getCourier());
		
		$this->em->flush();
	}

	public function getAllCustomerOrderByOrderType($orderType)
	{
		try
		{
			$qb = $this->customerOrderRepo->createQueryBuilder("c");
			$qb->where($qb->expr()->eq("c.orderType",":orderType"));

			$qb->setParameters(array(
				"orderType"=> $orderType));
			
			return $qb->getQuery()->getResult();
		}
		catch(\Exception $e){
		    return array();
		}
	}
}
?>