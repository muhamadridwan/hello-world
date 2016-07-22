<?php

namespace AppBundle\Service;
use AppBundle\Repository\MealCategoryRepository;
use Doctrine\ORM\EntityManager;

class MealCategoryManagementService
{
	private $mealCategoryRepo;
	private $em;
	function __construct( EntityManager $em)
	{
		$this->em = $em;
		$this->mealCategoryRepo = new MealCategoryRepository($this->em);
	}

	public function addMealCategory($mealCategory)
	{
		$this->mealCategoryRepo->addMealCategory($mealCategory);
	}

	public function deleteMealCategory($id)
	{
		return $this->mealCategoryRepo->deleteMealCategory($id);
	}

	public function getMealCategoryById($id)
	{
		return $this->mealCategoryRepo->getMealCategoryById($id);
	}

	public function editMealCategory($mealCategory, $modifiedMealCategory)
	{
		$this->mealCategoryRepo->editMealCategory($mealCategory, $modifiedMealCategory);
	}

	public function getAllMealCategory()
	{
		return $this->mealCategoryRepo->getAllMealCategory();
	}
}

?>