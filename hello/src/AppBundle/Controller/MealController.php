<?php 
namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use AppBundle\Entity\MealCategory;
use AppBundle\Entity\Meal;

class MealController extends BaseController
{

	
	function __construct()
	{}

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
        
        $form = $this->createFormBuilder($meal)
            ->add('category', EntityType::class, array(
				    'class' => 'AppBundle:MealCategory',
				    'choices' => $mealCategoryService->getAllMealCategory(),
				    'choice_label' => 'categoryName'))
            ->add('mealName', TextType::class)
            ->add('mealDesc', TextareaType::class)
            ->add('mealPrice', NumberType::class)
            ->add('discount', NumberType::class)
            ->add('picture', FileType::class, array(
            		'attr' => array(
            			'class'=> 'uploadfile',
            			'elm-view' => '#cust-pic-preview'
            			)))
            ->add('save', SubmitType::class, array('label' => 'Save'))
            ->getForm();
		$error = "";

		if($request->getMethod()=='POST')
		{

		    $form->handleRequest($request);
		    $newMeal = $form->getData();
		    
		    $validator = $this->get('validator');
    		$errors = $validator->validate($newMeal);

		    if (count($errors) > 0) {
		        $error = (string) $errors;
		    }
		    else
		    {
		    	$picture = $form['picture']->getData();
		    	$serverDir = $this->get('kernel')->getRootDir().'/../web/bundles/images/meal/';		    	
		    	
		    	$filename = $newMeal->getMealName()."-".time().".".$picture->getClientOriginalExtension();
		    	$picture->move($serverDir, $filename);
		    	$newMeal->setPicture($filename);
		        $this->container->get('app.bundle.meal.management.service')->addMeal($newMeal);
		        return $this->redirectToRoute("mealIndex");
		    } 
		}

        $this->resp["form"] = $form->createView();
        $this->resp["meal"] = $meal;
        $this->resp["act"] = "add";
        $this->resp['error'] = $error;
		return $this->render("configuration/meal/meal_form.html.twig", $this->resp);
		
	}

	public function editAction($id,Request $request)
	{
		$this->authSetup();
		$error = "";
		$mealCategoryService = $this->container->get('app.bundle.meal.category.management.service');
		$meal = $this->container->get('app.bundle.meal.management.service')->getMealById($id);
        
        if (!$meal) {
	        $error = 'No meal found for meal id '.$id;   
	    }

        $form = $this->createFormBuilder($meal)
            ->add('category', EntityType::class, array(
				    'class' => 'AppBundle:MealCategory',
				    'choices' => $mealCategoryService->getAllMealCategory(),
				    'choice_label' => 'categoryName'))
            ->add('mealName', TextType::class)
            ->add('mealDesc', TextareaType::class)
            ->add('mealPrice', NumberType::class)
            ->add('discount', NumberType::class)
            ->add('picture', FileType::class, array(
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

		    if (count($errors) > 0) {
		        $error = (string) $errors;
		    }
		    else
		    {
		        $picture = $form['picture']->getData();
		    	$serverDir = $this->get('kernel')->getRootDir().'/../web/bundles/images/meal/';		    	
		    	
		    	$filename = $meal->getMealName()."-".time().".".$picture->getClientOriginalExtension();
		    	$picture->move($serverDir, $filename);
		    	$modifiedMeal->setPicture($filename);
		        $this->container->get('app.bundle.meal.management.service')->editMeal($meal, $modifiedMeal);
		        return $this->redirectToRoute("mealIndex");
		    }
		    
		} 
		else
		{
			
			$this->resp["form"] = $form->createView();
	        $this->resp["meal"] = $meal;
	        $this->resp["act"] = "edit";
	        $this->resp['error'] = $error;
			return $this->render("configuration/meal/meal_form.html.twig", $this->resp);
		}

	}

	
	public function deleteAction($id)
	{
		$serverDir = $this->get('kernel')->getRootDir().'/../web/bundles/images/meal/';		    	
		$picturePath = $this->container->get('app.bundle.meal.management.service')->getMealById($id)->getPicture();

		$this->container->get('app.bundle.meal.management.service')->deleteMeal($id);
		unlink($serverDir.$picturePath);
		return $this->redirectToRoute("mealIndex");
	}

	
}
?>