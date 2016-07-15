<?php

namespace AppBundle\Service;
use AppBundle\Repository\MealCategoryRepository;
use AppBundle\Repository\MealRepository;
use AppBundle\Repository\CustomerRepository;
use Doctrine\ORM\EntityManager;
use AppBundle\Entity\CustomerOrder;
use AppBundle\Entity\OrderDetail;
use Doctrine\Common\Collections\ArrayCollection;

class OrderManagementService
{
	private $mealCategoryRepo;
	private $mealRepo;
	private $customerRepo;
	private $orderDetailRepo;
	private $em;
	function __construct( EntityManager $em)
	{
		$this->em = $em;
		$this->mealCategoryRepo = new MealCategoryRepository($this->em);
		$this->mealRepo = new MealRepository($this->em);
		$this->customerRepo = new CustomerRepository($this->em);
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
		$custOrder->setOrderType(0);
		$custOrder->setOrderDate(new \DateTime(date('Y-m-d H:m:i')));
		$custOrder->setPaymentMethod("CASH");
		$custOrder->setOrderStatus(0);
		
		$result['custOrder'] = new ArrayCollection();
		$result['custOrder']->add($custOrder);
		$result['orderDetail'] = new ArrayCollection();
		foreach($listOfOrderedMeal as $orderedMeal)
		{
			$orderDetail = new OrderDetail();
			$orderDetail->setMeal($orderedMeal['meal']);
			$orderDetail->setQty($orderedMeal['qty']);
			$orderDetail->setTotalBeforeDiscount(
				$orderedMeal['qty'] * $orderedMeal['meal']->getMealPrice());
			$orderDetail->setTotalDiscount(
				$orderDetail->getTotalBeforeDiscount() * $orderedMeal['meal']->getDiscount()/100);
			$orderDetail->setTotal($orderDetail->getTotalBeforeDiscount() - $orderDetail->getTotalDiscount());
			$this->em->persist($orderDetail->getMeal());
			$result['orderDetail']->add($orderDetail);	
		}

		return $result;
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