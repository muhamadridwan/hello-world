<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\MealCategory;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class MealCategoryController extends BaseController
{
	function __construct()
	{
		parent::__construct();

	}

	public function indexAction()
	{
		$this->authSetup();
		$mealCategories = $this->container->get('app.bundle.meal.category.management.service')->getAllMealCategory();
        
		$this->resp["mealCategories"] = $mealCategories;
		return $this->render("configuration/meal_category/index.html.twig", $this->resp);
	}

	public function addAction(Request $request)
	{
		$this->authSetup();
		$mealCategory = new MealCategory();
        	
        $form = $this->createFormBuilder($mealCategory)
            ->add('categoryName', TextType::class)
            ->add('categoryDesc', TextareaType::class)
            ->add('save', SubmitType::class, array('label' => 'Save'))
            ->getForm();
		$error = "";

		if($request->getMethod()=='POST')
		{
		    $form->handleRequest($request);
		    $newMealCategory = $form->getData();
		    
		    $validator = $this->get('validator');
    		$errors = $validator->validate($newMealCategory);

		    if (count($errors) > 0) {
		        $error = (string) $errors;
		    }
		    else
		    {
		        $this->container->get('app.bundle.meal.category.management.service')->addMealCategory($newMealCategory);
		        return $this->redirectToRoute("mealCategoryIndex");
		    } 
		}

        $this->resp["form"] = $form->createView();
        $this->resp["act"] = "add";
        $this->resp['error'] = $error;
		return $this->render("configuration/meal_category/meal_category_form.html.twig", $this->resp);
		
	}

	public function editAction($id,Request $request)
	{


		$this->authSetup();
		$error = "";

		$mealCategory = $this->container->get('app.bundle.meal.category.management.service')->getMealCategoryById($id);
        if (!$mealCategory) {
	        $error = 'No meal category found for id '.$id;   
	    }
        $form = $this->createFormBuilder($mealCategory)
            ->add('categoryName', TextType::class)
            ->add('categoryDesc', TextareaType::class)
            ->add('save', SubmitType::class, array('label' => 'Save'))
            ->getForm();
		
		if($request->getMethod()=='POST')
		{
		    $form->handleRequest($request);
		    $modifiedMealCategory = $form->getData();
		    
		    $validator = $this->get('validator');
    		$errors = $validator->validate($modifiedMealCategory);

		    if (count($errors) > 0) {
		        $error = (string) $errors;
		    }
		    else
		    {
		        $this->container->get('app.bundle.meal.category.management.service')->editMealCategory($mealCategory, $modifiedMealCategory);
		        return $this->redirectToRoute("mealCategoryIndex");
		    }
		    
		} 
		else
		{
			
			$this->resp["form"] = $form->createView();
			$this->resp["mealCategory"] = $mealCategory;
	        $this->resp["act"] = "edit";
	        $this->resp['error'] = $error;
			return $this->render("configuration/meal_category/meal_category_form.html.twig", $this->resp);
		}

	}

	
	public function deleteAction($id)
	{
		$this->container->get('app.bundle.meal.category.management.service')->deleteMealCategory($id);
		return $this->redirectToRoute("mealCategoryIndex");
	}

}

?>