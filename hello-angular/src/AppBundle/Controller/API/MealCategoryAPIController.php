<?php 
namespace AppBundle\Controller\API;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\MealCategory;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class MealCategoryAPIController extends BaseAPIController
{
	function __construct()
	{
		parent::__construct();
	}

	public function getAllMealCategoryAction(Request $request)
	{
		if($this->isTokenValid($request))
		{
			$mealCategories = $this->container->get('app.bundle.meal.category.management.service')->getAllMealCategory();

			$jmealCategories = $this->toJson($mealCategories);
			$this->response->setStatusCode(200);
			$this->response->setData(json_decode($jmealCategories));

		}

		return $this->response;
		
	}

	
	public function saveAction(Request $request)
	{
		
        /*$form = $this->createFormBuilder($mealCategory)
            ->add('categoryName', TextType::class)
            ->add('categoryDesc', TextareaType::class, array('required'=>false))
            ->getForm();
		$errors = "";*/
		$response = new JsonResponse();
		$response->setStatusCode(500);
		if($request->getMethod()=='POST')
		{
		    
		    $data = $request->getContent();

		    $encoders = array(new XmlEncoder(), new JsonEncoder());
			$normalizers = array(new ObjectNormalizer());
			$serializer = new Serializer($normalizers, $encoders);
		    
		    $retrievedMealCategory = $serializer->deserialize($data, 'AppBundle\Entity\MealCategory', 'json');
		   
			//$mealCategory->setCategoryName($data["categoryName"]);
			//$mealCategory->setCategoryDesc($data["categoryDesc"]);

		    if(isset($data["categoryId"])) {
		    	
			    $mealCategory = $this->container->get('app.bundle.meal.category.management.service')->getMealCategoryById($data["categoryId"]);
			    if (!$mealCategory) {
			    	$response->setStatusCode(404, "Meal category doesn't exist.");

			    }
			    else
			    {
			    	$this->container->get('app.bundle.meal.category.management.service')->editMealCategory($mealCategory, $retrievedMealCategory);
			    	$response->setStatusCode(200);
			    }
				
			}
			else
			{
				$this->container->get('app.bundle.meal.category.management.service')->addMealCategory($retrievedMealCategory);

				$jmealCategory = $serializer->serialize($retrievedMealCategory, 'json');
				
				$response->setStatusCode(200);
				$response->setData(json_decode($jmealCategory));
			}


		}
		else
		{
			$response->setStatusCode(404);
		}

		

		return $response;
	}

	
	public function deleteAction(Request $request)
	{

		$response = new JsonResponse(); 
		$response->setStatusCode(500);

		if($request->getMethod()=='POST')
		{
		    
		    $data = json_decode($request->getContent(), true);

		    $mealCategory = $this->container->get('app.bundle.meal.category.management.service')->getMealCategoryById($data["categoryId"]);
		    
		   
		    $errorMessage = $this->container->get('app.bundle.meal.category.management.service')->deleteMealCategory($mealCategory->getCategoryId());
			if($errorMessage){
				$response->setStatusCode(500, $errorMessage[0]);
			}
			else{
				$encoders = array(new XmlEncoder(), new JsonEncoder());
				$normalizers = array(new ObjectNormalizer());
				$serializer = new Serializer($normalizers, $encoders);
				$jmealCategory = $serializer->serialize($mealCategory, 'json');

				$response->setStatusCode(200);
				$response->setData(json_decode($jmealCategory));
			}
		    
	    }

		return $response;
	}

	
}
?>