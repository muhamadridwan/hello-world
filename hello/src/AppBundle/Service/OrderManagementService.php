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
		return $this->mealCategoryRepo->getMealCategoryById($id);
	}

	public function editMealCategory($mealCategory, $modifiedMealCategory)
	{
		$this->mealCategoryRepo->editMealCategory($mealCategory, $modifiedMealCategory);
	}

	
}

?>