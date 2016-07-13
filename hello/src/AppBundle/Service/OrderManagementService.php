<?php

namespace AppBundle\Service;
use AppBundle\Repository\MealCategoryRepository;
use AppBundle\Repository\MealRepository;
use Doctrine\ORM\EntityManager;

class OrderManagementService
{
	private $mealCategoryRepo;
	private $mealRepo;
	private $em;
	function __construct( EntityManager $em)
	{
		$this->em = $em;
		$this->mealCategoryRepo = new MealCategoryRepository($this->em);
		$this->mealRepo = new MealRepository($this->em);
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
		$meals = $this->getAllMealByCategory($category);
		$keys = array_keys($listOfOrderedMeal);
		foreach($meals as $meal)
		{
			$qty = 0;
			if(in_array($meal->getMealId(), $keys))
			{
				$qty = $listOfOrderedMeal[$meal->getMealId()]['qty'];
			}

			array_push($result['orderDetail'],array('meal' => $meal, 'qty' => $qty));
		}

		return $result;
		 
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