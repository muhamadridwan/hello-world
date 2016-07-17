<?php

namespace AppBundle\Service;
use AppBundle\Repository\MealCategoryRepository;
use AppBundle\Repository\MealRepository;
use AppBundle\Repository\CustomerRepository;
use AppBundle\Repository\CustomerOrderRepository;
use AppBundle\Repository\OrderDetailRepository;
use Doctrine\ORM\EntityManager;
use AppBundle\Entity\CustomerOrder;
use AppBundle\Entity\OrderDetail;
use Doctrine\Common\Collections\ArrayCollection;

class OrderManagementService
{
	private $mealCategoryRepo;
	private $mealRepo;
	private $customerRepo;
	private $custOrderRepo;
	private $orderDetailRepo;
	
	private $em;
	function __construct( EntityManager $em)
	{
		$this->em = $em;
		$this->mealCategoryRepo = new MealCategoryRepository($this->em);
		$this->mealRepo = new MealRepository($this->em);
		$this->customerRepo = new CustomerRepository($this->em);
		$this->custOrderRepo = new CustomerOrderRepository($this->em);
		$this->orderDetailRepo = new OrderDetailRepository($this->em);
	}

	public function getActiveOrders()
	{
		$result = array();
		$result['custOrders'] = $this->custOrderRepo->getAllUndoneOrder();
		foreach($result['custOrders'] as $c)
		{
			$result['orderDetails'][$c->getOrderId()] = $this->orderDetailRepo->getAllOrderDetailByCustomerOrder($c);
		}
		
		return $result;
	}
	
	public function getAllMeal()
	{
		return $this->mealRepo->getAllMeal();
	}

	public function getAllMealCategory()
	{
		return $this->mealCategoryRepo->getAllMealCategory();
	}

	public function getAllMealByCategory($category)
	{
		if($category==null)
		{
			$category = $this->getMainMealCategory();
		}

		return $this->mealRepo->getAllMealByCategory($category);
	}

	public function getMainMealCategory()
	{
		return $this->mealCategoryRepo->getSingleMealCategoryByName("Main");
	}

	public function getOrderDetailMeal($listOfOrderedMeal, $category)
	{
		$result = array();
		$result['orderDetail'] = array();
		$result['category_id'] = $category->getCategoryId();
		$meals = $this->getAllMealByCategory($category);
		$keys = array_keys($listOfOrderedMeal);
		foreach($meals as $meal)
		{
			$qty = 0;
			if(in_array($meal->getMealId(), $keys))
			{
				$qty = $listOfOrderedMeal[$meal->getMealId()]['qty'];
			}

			$result['orderDetail'][$meal->getMealId()] = array('meal' => $meal, 'qty' => $qty);
		}

		return $result;
		 
	}

	public function getDineInOrder($listOfOrderedMeal)
	{
		$result = array();
		$custOrder = new CustomerOrder();
		$custOrder->setOrderId(time());
		$custOrder->setOrderType(0);
		$custOrder->setOrderDate(new \DateTime(date('Y-m-d H:m:i')));
		$custOrder->setPaymentMethod("CASH");
		$custOrder->setOrderStatus(0);
		
		$result['custOrder'] = new ArrayCollection();
		$result['custOrder']->add($custOrder);
		$result['orderDetail'] = new ArrayCollection();
		foreach($listOfOrderedMeal as $orderedMeal)
		{
			//var_dump($orderedMeal);
			$orderDetail = new OrderDetail();
			$orderDetail->setMeal($this->mealRepo->getMealById($orderedMeal['meal']->getMealId()));
			$orderDetail->setQty($orderedMeal['qty']);
			$orderDetail->setTotalBeforeDiscount(
				$orderedMeal['qty'] * $orderedMeal['meal']->getMealPrice());
			$orderDetail->setTotalDiscount(
				$orderDetail->getTotalBeforeDiscount() * $orderedMeal['meal']->getDiscount()/100);
			$orderDetail->setTotal($orderDetail->getTotalBeforeDiscount() - $orderDetail->getTotalDiscount());
			//$this->em->persist($orderDetail->getMeal());
			//$this->em->persist($orderDetail->getMeal()->getCategory());
			$result['orderDetail']->add($orderDetail);	
		}

		return $result;
	}
	
	public function saveOrder($data)
	{
		$custOrder = $data["custOrder"][0];
		$custOrder = $this->custOrderRepo->addCustomerOrder($custOrder);
		
		foreach($data["orderDetail"] as $orderDetail)
		{
			$orderDetail->setOrder($custOrder);
			$this->orderDetailRepo->addOrderDetail($orderDetail);
		}
	}
	public function getAllRestoTable()
	{
		return $this->customerRepo->getAllRestoTable();
	}

	public function addMealCategory($mealCategory)
	{
		$this->mealCategoryRepo->addMealCategory($mealCategory);
	}

	public function deleteMealCategory($id)
	{
		$this->mealCategoryRepo->deleteMealCategory($id);
	}

	public function getMealCategoryById($id)
	{
		if($id == -1)
		{
			return $this->getMainMealCategory();	
		}
		
		return $this->mealCategoryRepo->getMealCategoryById($id);
	}

	public function editMealCategory($mealCategory, $modifiedMealCategory)
	{
		$this->mealCategoryRepo->editMealCategory($mealCategory, $modifiedMealCategory);
	}

	
}

?>