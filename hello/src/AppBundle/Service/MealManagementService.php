<?php

namespace AppBundle\Service;
use AppBundle\Repository\MealRepository;
use Doctrine\ORM\EntityManager;

class MealManagementService
{
	private $mealRepo;
	private $em;
	function __construct( EntityManager $em)
	{
		$this->em = $em;
		$this->mealRepo = new MealRepository($this->em);
	}

	public function addMeal($meal)
	{
		$this->mealRepo->addMeal($meal);
	}

	public function deleteMeal($meal_id)
	{
		$this->mealRepo->deleteMeal($meal_id);
	}

	public function getMealById($meal_id)
	{
		return $this->mealRepo->getMealById($meal_id);
	}

	public function editMeal($meal, $modifiedMeal)
	{
		$this->mealRepo->editMeal($meal, $modifiedMeal);
	}

	public function getAllMeal()
	{
		return $this->mealRepo->getAllMeal();
	}
}

?>