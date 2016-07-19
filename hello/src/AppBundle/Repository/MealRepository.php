<?php
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManager;

class MealRepository 
{
	private $em;
	private $mealRepo;
	function __construct(EntityManager $em)
	{
		$this->em = $em;
		$this->mealRepo = $this->em->getRepository("AppBundle:Meal");
	}

	public function addMeal($meal)
	{
		$this->em->persist($meal);
		$this->em->flush();
	}

	public function deleteMeal($meal_id)
	{
		$meal = $this->getMealById($meal_id);
		if($meal==null)
		{
			return "There is no meal with id ".$id.".";
		}
		
		$this->em->remove($meal);
		$this->em->flush();
	}

	public function getMealById($meal_id)
	{
		return $this->mealRepo->find($meal_id);
	}


	public function editMeal($meal, $modifiedMeal)
	{
		$meal->setCategory($modifiedMeal->getCategory());
		$meal->setMealName($modifiedMeal->getMealName());
		$meal->setMealDesc($modifiedMeal->getMealDesc());
		$meal->setMealPrice($modifiedMeal->getMealPrice());
		$meal->setDiscount($modifiedMeal->getDiscount());
		$meal->setPicture($modifiedMeal->getPicture());
		
		$this->em->flush();
	}

	public function getAllMeal()
	{
		return $this->mealRepo->findAll();
	}

	public function getAllMealByCategory($category)
	{
		$qb = $this->mealRepo->createQueryBuilder("m");
		$qb->where($qb->expr()->eq("m.category",":category"));

		$qb->setParameters(array(
			"category"=> $category));
		
		return $qb->getQuery()->getResult();
	}

	public function getAllMealByListOfMealId($listOfMealId)
	{
		$qb = $this->mealRepo->createQueryBuilder("m");
		$qb->where($qb->expr()->in("m.mealId",":listOfMealId"));

		$qb->setParameters(array(
			"listOfMealId"=> $listOfMealId));
		
		return $qb->getQuery()->getResult();	
	}
}
?>