<?php 
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\TUser;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use AppBundle\Form\Type\OrderDetailType;

class OrderController extends BaseController
{
	private $session;
	function __construct()
	{
		parent::__construct();
		$this->session = new Session();
	}

	public function orderIndexAction($category_id, Request $request)
	{
		$this->authSetup();
		$orderManagementService = $this->container->get('app.bundle.order.management.service');
		$category = $orderManagementService->getMealCategoryById($category_id);
		

		// Get a session value
		//$category = $this->getUser()->getAttribute('category', null);
		//$this->getUser()->setAttribute('category', $orderManagementService->getMainMealCategory());
		/*// Set a session value
		$this->getUser()->setAttribute('name', $value);
		$session = new Session();
		$this->session->start();

		// set and get session attributes
		$session->set('name', 'Drak');
		$session->get('name');

		// set flash messages
		$session->getFlashBag()->add('notice', 'Profile updated');

		// retrieve messages
		foreach ($session->getFlashBag()->get('notice', array()) as $message) {
		    echo '<div class="flash-notice">'.$message.'</div>';
		}*/
		$mealCategory = $this->container->get('app.bundle.order.management.service')->getAllMealCategory();
		
		$listOfOrderedMeal = $this->session->get('listOfOrderedMeal', array());
		
		//$meals = $this->container->get('app.bundle.order.management.service')->getAllMealByCategory($category);
		$listOfOrderDetailMeal = $this->container->get('app.bundle.order.management.service')->getOrderDetailMeal($listOfOrderedMeal, $category);

		$orderDetailForm = $this->createFormBuilder($listOfOrderDetailMeal)
				->add( 'orderDetail', CollectionType::class, array('entry_type'=> OrderDetailType::class))
				->getForm();

		$this->resp["mealCategory"] = $mealCategory;
		//$this->resp["meals"] = $meals;
		$this->resp['mealDir'] = 'bundles/images/meal/';
		$this->resp['activeCategoryId'] = $category->getCategoryId();
		$this->resp['orderDetailForm'] = $orderDetailForm->createView();
		$this->resp['listOfOrderedMeal'] = $listOfOrderedMeal;
		//var_dump($this->resp['orderDetailForm']);
		return $this->render("orders/order/index.html.twig", $this->resp);
	}

	public function pickTheMealAction($meal_id, $category_id)
	{
		
		/*$listOfMealId = $this->session->get('listOfMealId', array());
		$listOfMealId[$meal_id] = $meal_id;
		$this->session->set('listOfMealId', $listOfMealId);

		return $this->redirectToRoute('orderIndex', array('category_id'=>$category_id));*/
	}

	public function activeOrderIndexAction()
	{
		return new Response("Sorry, Active Order page is under construction.");
	}

	public function historyIndexAction()
	{
		return new Response("Sorry, history Order page is under construction.");
	}
}


?>