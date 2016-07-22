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
		
		try
		{
			$this->em->remove($meal);
			$this->em->flush();
		}
		catch(\Exception $e)
		{
			return $e->getMessage();
		}
		
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

	public function getMeals($pagingInfo = null)
	{
		/*if ($pagingInfo != null)
        {
        	$pagingInfo->totalRows = $this->getCountAllMeal();
        	$pagingInfo->totalPage = ceil(($pagingInfo->totalRows / $pagingInfo->totalRowsOnPage));
        	
        }*/
		/*// This code is only to set pagination view data
            string pagingQuery = "";
            string pagingCondition = "";
            string outletQeury = "";
            if (pagingInfo != null)
            {
                pagingInfo.TotalRows = (int)ExecuteScalarQuery(
                                        string.Format(
                                "SELECT COUNT(A.OutletID) AS Total FROM ( "+SQLQueries.GetOutlets+" ) A ",
                                searchParams.Territory ?? "",
                                searchParams.BlockCode ?? "",
                                searchParams.OutletName ?? "",
                                searchParams.OwnerName ?? "",
                                searchParams.Address ?? "",
                                searchParams.LocalId ?? "",
                                searchParams.IsGPSValid ?? "",
                                searchParams.CreatedDateFrom == null ? "" : searchParams.CreatedDateFrom.Value.Date.ToString("yyyy-MM-dd"),
                                searchParams.CreatedDateTo == null ? "" : searchParams.CreatedDateTo.Value.Date.ToString("yyyy-MM-dd"),
                                //searchParams.Area ?? "",
                                //searchParams.IsMapBeenUpdated != null ? searchParams.ToString() : "",
                                searchParams.UserID ?? "",
                                searchParams.OutletType ?? "",
                                //string.IsNullOrEmpty(searchParams.IsManagerReview) ? "-1" : searchParams.IsManagerReview,
                                pagingQuery,
                                pagingCondition
                                ));
                pagingCondition = " ORDER BY  o.CheckIn DESC";
                pagingInfo.TotalPage = (int)Math.Ceiling(((double)pagingInfo.TotalRows / pagingInfo.TotalRowsOnPage));
                
                pagingQuery = " * FROM (  SELECT  ROW_NUMBER() OVER(ORDER BY o.CreatedDate2 DESC) AS NUMBER, ";
                pagingCondition = string.Format(" ) o WHERE o.NUMBER  "+
                                                    " BETWEEN (({0} - 1)  * {1} + 1) "+
                                                    " AND ({0} * {1})  "+pagingCondition, pagingInfo.CurrentPage, pagingInfo.TotalRowsOnPage);
            }

            // This is the main query
            
            outletQeury = string.Format(
                                SQLQueries.GetOutlets,
                                searchParams.Territory ?? "",
                                searchParams.BlockCode ?? "",
                                searchParams.OutletName ?? "",
                                searchParams.OwnerName ?? "",
                                searchParams.Address ?? "",
                                searchParams.LocalId ?? "",
                                searchParams.IsGPSValid ?? "",
                                searchParams.CreatedDateFrom == null ? "" : searchParams.CreatedDateFrom.Value.Date.ToString("yyyy-MM-dd"),
                                searchParams.CreatedDateTo == null ? "" : searchParams.CreatedDateTo.Value.Date.ToString("yyyy-MM-dd"),
                                //searchParams.Area ?? "",
                                //searchParams.IsMapBeenUpdated != null ? searchParams.ToString() : "",
                                searchParams.UserID ?? "",
                                searchParams.OutletType ?? "",
                                //string.IsNullOrEmpty(searchParams.IsManagerReview) ? "-1" : searchParams.IsManagerReview,
                                pagingQuery,
                                pagingCondition
                                );
            
            List<OutletView> outletDataList = GetDataFromQuery<OutletView>(outletQeury);

            if (pagingInfo != null)
            {
                List<int> numbers = outletDataList.Select(x => x.Number).ToList<int>();
                //pagingInfo.StartRowsNumber = numbers.Min();
                //pagingInfo.EndRowsNumber = numbers.Max();
                SetPagingMinMax(pagingInfo, numbers);
            }

            return outletDataList;*/
		return $this->mealRepo->createQueryBuilder("m")
		->setFirstResult(0)
		->setMaxResults(5)
		->getQuery()->getResult();
	}

	public function getCountAllMeal()
	{
		$qb = $this->mealRepo->createQueryBuilder("m");
		$qb->select($qb->expr()->count('m.mealId'));
		return $qb->getQuery()->getSingleScalarResult();
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