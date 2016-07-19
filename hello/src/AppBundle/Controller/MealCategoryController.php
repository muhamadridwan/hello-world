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
            ->add('categoryDesc', TextareaType::class, array('required'=>false))
            ->add('save', SubmitType::class, array('label' => 'Save'))
            ->getForm();
		$errors = "";

		if($request->getMethod()=='POST')
		{
		    $form->handleRequest($request);
		    $newMealCategory = $form->getData();
		    
		    $validator = $this->get('validator');
    		$errors = $validator->validate($newMealCategory);

		    if (count($errors) == 0) {
		        $this->container->get('app.bundle.meal.category.management.service')->addMealCategory($newMealCategory);
		        $this->session->getFlashBag()->add('success', 'Add new category is successful.');
		        return $this->redirectToRoute("mealCategoryIndex");
		    }
		}

        $this->resp["form"] = $form->createView();
        $this->resp["act"] = "add";
        $this->resp['errors'] = $errors;
		return $this->render("configuration/meal_category/meal_category_form.html.twig", $this->resp);
		
	}

	public function editAction($id,Request $request)
	{


		$this->authSetup();
		$errors = "";

		$mealCategory = $this->container->get('app.bundle.meal.category.management.service')->getMealCategoryById($id);
        if (!$mealCategory) {
	        $errors[0]['message'] = 'No meal category found for id '.$id;   
	    }

        $form = $this->createFormBuilder($mealCategory)
            ->add('categoryName', TextType::class)
            ->add('categoryDesc', TextareaType::class, array('required'=>false))
            ->add('save', SubmitType::class, array('label' => 'Save'))
            ->getForm();
		
		if($request->getMethod()=='POST')
		{
		    $form->handleRequest($request);
		    $modifiedMealCategory = $form->getData();
		    
		    $validator = $this->get('validator');
    		$errors = $validator->validate($modifiedMealCategory);

		    if (count($errors) == 0) {
		        $this->container->get('app.bundle.meal.category.management.service')->editMealCategory($mealCategory, $modifiedMealCategory);
		        $this->session->getFlashBag()->add('success', 'Update category is successful. Meal category with id '.$id.' has been updated.');
		        return $this->redirectToRoute("mealCategoryIndex");
		    }
		} 

		$this->resp["form"] = $form->createView();
		$this->resp["mealCategory"] = $mealCategory;
        $this->resp["act"] = "edit";
        $this->resp['errors'] = $errors;
		return $this->render("configuration/meal_category/meal_category_form.html.twig", $this->resp);
		

	}

	
	public function deleteAction($id)
	{
		$errorMessage = $this->container->get('app.bundle.meal.category.management.service')->deleteMealCategory($id);

		if($errorMessage){
			$this->session->getFlashBag()->add('error', $errorMessage);
		}
		else{
			$this->session->getFlashBag()->add('success', 'Delete category is successful. Meal category with id '.$id.' has been removed.');
		}

		return $this->redirectToRoute("mealCategoryIndex");
	}

}

?>