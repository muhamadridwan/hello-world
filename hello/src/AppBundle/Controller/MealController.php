<?php 
namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use AppBundle\Entity\MealCategory;
use AppBundle\Entity\Meal;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class MealController extends BaseController
{
	function __construct()
	{
		parent::__construct();
	}

	public function indexAction()
	{
		$this->authSetup();
		$meals = $this->container->get('app.bundle.meal.management.service')->getAllMeal();
        
		$this->resp["meals"] = $meals;
		return $this->render("configuration/meal/index.html.twig", $this->resp);
	}

	public function addAction(Request $request)
	{
		$this->authSetup();
		$mealCategoryService = $this->container->get('app.bundle.meal.category.management.service');
		$meal = new Meal();
        $errors = "";

        $form = $this->createFormBuilder($meal)
            ->add('category', EntityType::class, array(
				    'class' => 'AppBundle:MealCategory',
				    'choices' => $mealCategoryService->getAllMealCategory(),
				    'choice_label' => 'categoryName'))
            ->add('mealName', TextType::class)
            ->add('mealDesc', TextareaType::class, array('required'=>false))
            ->add('mealPrice', IntegerType::class)
            ->add('discount', IntegerType::class, array('required'=>false))
            ->add('picture', HiddenType::class, array('required'=>false))
            ->add('pictureFile', FileType::class, array(
            		'mapped' => false,
            		'required'=>false,
            		'attr' => array(
            			'class'=> 'uploadfile',
            			'elm-view' => '#cust-pic-preview'
            			)))
            ->add('save', SubmitType::class, array('label' => 'Save'))
            ->getForm();
		

		if($request->getMethod()=='POST')
		{

		    $form->handleRequest($request);
		    $newMeal = $form->getData();
		    
		    $validator = $this->get('validator');
    		$errors = $validator->validate($newMeal);

		    if (count($errors) == 0) {

		    	$picture = $form['pictureFile']->getData();
		    	$serverDir = $this->get('kernel')->getRootDir().'/../web/bundles/images/meal/';		    	
		    	
		    	try
		    	{
		    		if($picture!=null)
		    		{
		    			$filename = $newMeal->getMealName()."-".time().".".$picture->getClientOriginalExtension();
				    	$picture->move($serverDir, $filename);
				    	$newMeal->setPicture($filename);	
		    		}

		    		$this->container->get('app.bundle.meal.management.service')->addMeal($newMeal);
					$this->session->getFlashBag()->add('success', 'Add new meal is successful.');
					return $this->redirectToRoute("mealIndex");
		    	}
		    	catch(\Exception $e)
		    	{
		    		$errors[0]['message'] = "Failed to upload picture.";
		    	}
		    }
		}

        $this->resp["form"] = $form->createView();
        $this->resp["meal"] = $meal;
        $this->resp["act"] = "add";
        $this->resp['errors'] = $errors;
		return $this->render("configuration/meal/meal_form.html.twig", $this->resp);
		
	}

	public function editAction($id,Request $request)
	{
		$this->authSetup();
		$errors = "";
		$mealCategoryService = $this->container->get('app.bundle.meal.category.management.service');
		$meal = $this->container->get('app.bundle.meal.management.service')->getMealById($id);
        
        if (!$meal) {
	        $errors[0]['message'] = 'No meal found for meal id '.$id;   
	    }

        $form = $this->createFormBuilder($meal)
            ->add('category', EntityType::class, array(
				    'class' => 'AppBundle:MealCategory',
				    'choices' => $mealCategoryService->getAllMealCategory(),
				    'choice_label' => 'categoryName'))
            ->add('mealName', TextType::class)
            ->add('mealDesc', TextareaType::class, array('required'=>false))
            ->add('mealPrice', IntegerType::class)
            ->add('discount', IntegerType::class, array('required'=>false))
            ->add('picture', HiddenType::class, array('required'=>false))
            ->add('pictureFile', FileType::class, array(
            		'mapped' => false,
            		'required'=>false,
            		'data_class' => null,
            		'attr' => array(
            			'class'=> 'uploadfile',
            			'elm-view' => '#cust-pic-preview'
            			)))
            ->add('save', SubmitType::class, array('label' => 'Save'))
            ->getForm();
		
		
		if($request->getMethod()=='POST')
		{
		    $form->handleRequest($request);
		    $modifiedMeal = $form->getData();
		    
		    $validator = $this->get('validator');
    		$errors = $validator->validate($modifiedMeal);

		    if (count($errors) == 0) {
		        
		        $picture = $form['pictureFile']->getData();
		    	$serverDir = $this->get('kernel')->getRootDir().'/../web/bundles/images/meal/';		    	
		    	
		    	try
		    	{
		    		if($picture!=null)
		    		{
		    			$filename = $meal->getMealName()."-".time().".".$picture->getClientOriginalExtension();
				    	$picture->move($serverDir, $filename);
				    	if($meal->getPicture()){
							try{
								unlink($serverDir.$meal->getPicture());
							}
							catch(\Exception $e){}
						}
				    	$modifiedMeal->setPicture($filename);	
		    		}

		    		$this->container->get('app.bundle.meal.management.service')->editMeal($meal, $modifiedMeal);
		        	$this->session->getFlashBag()->add('success', 'Update meal is successful. Meal with id '.$id.' has been updated.');
		        	return $this->redirectToRoute("mealIndex");
		    		
		    	}
		    	catch(\Exception $e)
		    	{
		    		$errors[0]['message'] = "Failed to upload picture.";
		    	}
		    }
		    
		}
			
		$this->resp["form"] = $form->createView();
        $this->resp["meal"] = $meal;
        $this->resp["act"] = "edit";
        $this->resp['errors'] = $errors;
		return $this->render("configuration/meal/meal_form.html.twig", $this->resp);
	}

	
	public function deleteAction($id)
	{
		$serverDir = $this->get('kernel')->getRootDir().'/../web/bundles/images/meal/';		    	
		$picturePath = $this->container->get('app.bundle.meal.management.service')->getMealById($id)->getPicture();

		$errorMessage = $this->container->get('app.bundle.meal.management.service')->deleteMeal($id);
		if($errorMessage){
			$this->session->getFlashBag()->add('error', $errorMessage);
		}
		else{
			if($picturePath){
				try{
					unlink($serverDir.$picturePath);
				}
				catch(\Exception $e){}
			}
			
			$this->session->getFlashBag()->add('success', 'Delete meal is successful. Meal with id '.$id.' has been removed.');
		}

		return $this->redirectToRoute("mealIndex");
	}

	
}
?>