<?php
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManager;

class OrderDetailRepository 
{
	private $em;
	private $orderDetailRepo;
	function __construct(EntityManager $em)
	{
		$this->em = $em;
		$this->orderDetailRepo = $this->em->getRepository("AppBundle:OrderDetail");
	}

	public function addOrderDetail($orderDetail)
	{
		$this->em->persist($orderDetail);
		$this->em->flush();
	}

	public function deleteOrderDetail($order_detail_id)
	{
		$orderDetail = $this->getOrderDetailById($order_detail_id);
		if($orderDetail==null)
		{
			return "There is no order detail with id ".$order_detail_id.".";
		}
		
		try
		{
			$this->em->remove($orderDetail);
			$this->em->flush();
		}
		catch(\Exception $e)
		{
			return $e->getMessage();
		}
		
	}

	public function getOrderDetailById($employee_id)
	{
		return $this->orderDetailRepo->find($id);

	}

	public function editOrderDetail($orderDetail, $modifiedOrderDetail)
	{
		//$employee->setUser($modifiedEmployee->getUser());
		$orderDetail->setOrder($modifiedOrderDetail->getOrder());
		$orderDetail->setMeal($modifiedOrderDetail->getMeal());
		$orderDetail->setQty($modifiedOrderDetail->getQty());
		$orderDetail->setTotal($modifiedOrderDetail->getTotal());
		$orderDetail->setTotalDiscount($modifiedOrderDetail->getTotalDiscount());
		$orderDetail->setTotalBeforeDiscount($modifiedOrderDetail->getTotalBeforeDiscount());
		
		$this->em->flush();
	}

	public function getAllOrderDetailByCustomerOrder($custOrder)
	{
		try
		{
			$qb = $this->orderDetailRepo->createQueryBuilder("od");
			$qb->where($qb->expr()->eq("od.order",":custOrder"));

			$qb->setParameters(array(
				"custOrder"=> $custOrder));
			
			return $qb->getQuery()->getResult();
		}
		catch(\Exception $e){
		    return array();
		}
	}
}
?>