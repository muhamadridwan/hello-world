<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManager;

class MealCategoryRepository 
{
	private $em;
	private $mealCategoryRepo;
	function __construct(EntityManager $em)
	{
		$this->em = $em;
		$this->mealCategoryRepo = $this->em->getRepository("AppBundle:MealCategory");
	}

	public function addMealCategory($mealCategory)
	{
		$this->em->persist($mealCategory);
		$this->em->flush();
	}

	public function deleteMealCategory($id)
	{
		$category = $this->getMealCategoryById($id);
		$this->em->remove($category);
		$this->em->flush();
	}

	public function editMealCategory($mealCategory, $modifiedMealCategory)
	{
		$mealCategory->setCategoryName($modifiedMealCategory->getCategoryName());
		$mealCategory->setCategoryDesc($modifiedMealCategory->getCategoryDesc());
		
		$this->em->flush();
	}

	public function getMealCategoryById($id)
	{
		return $this->mealCategoryRepo->find($id);
	}

	public function getSingleMealCategoryByName($name)
	{
		$qb = $this->mealCategoryRepo->createQueryBuilder("c");
		$qb->where($qb->expr()->like("c.categoryName",":name"));

		$qb->setParameters(array(
			"name"=> "%".$name."%"));
		
		return $qb->getQuery()->getSingleResult();
	}

	public function getAllMealCategory()
	{
		return $this->mealCategoryRepo->findAll();
	}
}


?>