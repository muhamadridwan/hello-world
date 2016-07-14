<?php 
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\TUser;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use AppBundle\Form\Type\PickedMealType;
use AppBundle\Form\Type\OrderDetailType;
use AppBundle\Form\Type\CheckoutDetailType;

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
		
		$mealCategory = $this->container->get('app.bundle.order.management.service')->getAllMealCategory();
		
		$listOfOrderedMeal = $this->session->get('listOfOrderedMeal', array());
		
		$listOfOrderDetailMeal = $this->container->get('app.bundle.order.management.service')->getOrderDetailMeal($listOfOrderedMeal, $category);

		$orderDetailForm = $this->createFormBuilder($listOfOrderDetailMeal)
				->add( 'orderDetail', CollectionType::class, array('entry_type'=> PickedMealType::class))
				->add('category_id', TextType::class, array('attr'=>array('class'=>'hidden')))
				->getForm();

		$this->resp["mealCategory"] = $mealCategory;
		$this->resp['mealDir'] = 'bundles/images/meal/';
		$this->resp['activeCategoryId'] = $category->getCategoryId();
		$this->resp['orderDetailForm'] = $orderDetailForm->createView();
		$this->resp['listOfOrderedMeal'] = $listOfOrderedMeal;

		return $this->render("orders/order/index.html.twig", $this->resp);
	}

	public function pickTheMealAction(Request $request)
	{
		$this->authSetup();
		$orderManagementService = $this->container->get('app.bundle.order.management.service');
		
		$category = $orderManagementService->getMealCategoryById(-1);
		$listOfOrderedMeal = $this->session->get('listOfOrderedMeal', array());
		$listOfOrderDetailMeal = $this->container->get('app.bundle.order.management.service')->getOrderDetailMeal($listOfOrderedMeal, $category);

		$orderDetailForm = $this->createFormBuilder($listOfOrderDetailMeal)
				->add( 'orderDetail', CollectionType::class, array('entry_type'=> PickedMealType::class))
				->add('category_id', TextType::class, array('attr'=>array('class'=>'hidden')))
				->getForm();
        	
		$error = "";
		
		if($request->getMethod()=='POST')
		{
		    $orderDetailForm->handleRequest($request);
			$formData = $orderDetailForm->getData();
		    foreach($orderDetailForm->get('orderDetail') as $od)
			{
				if($od->get('save')->isClicked())
				{
					$data = $od->getData();
					if($data['qty'] >= 1)
					{
						$listOfOrderedMeal[$data['meal']->getMealId()]['meal'] = $data['meal'];
						$listOfOrderedMeal[$data['meal']->getMealId()]['qty'] = $data['qty'];
					}
					
				}
			}
			
			$this->session->set('listOfOrderedMeal', $listOfOrderedMeal);
		}
		
		return $this->redirectToRoute('orderIndex', array('category_id'=>$formData['category_id']));
		
	}
	
	public function cancelPickTheMealAction($meal_id, $category_id, Request $request)
	{
		$this->authSetup();
		$listOfOrderedMeal = $this->session->get('listOfOrderedMeal', array());
		unset($listOfOrderedMeal[$meal_id]);
		$this->session->set('listOfOrderedMeal', $listOfOrderedMeal);
		
		return $this->redirectToRoute('orderIndex', array('category_id'=>$category_id));
	}
	
	public function checkOutTheOrdersAction()
	{
		$this->authSetup();
		$orderManagementService = $this->container->get('app.bundle.order.management.service');
		$employeeManagementService = $this->container->get('app.bundle.employee.management.service');
		
		$listOfOrderedMeal = $this->session->get('listOfOrderedMeal', array());
		$custOrder = $orderManagementService->getDineInOrder($listOfOrderedMeal);
		$custOrder['custOrder']->setCashier($employeeManagementService->getEmployeeByUser($this->getUser()));
		unset($custOrder['custOrder']);
		$custOrderForm = $this->createFormBuilder($custOrder)
				->add('orderDetail', CollectionType::class, array('entry_type'=> OrderDetailType::class,'meals'=> $orderManagementService->getAllMeal()))
				/*->add('custOrder', CollectionType::class, 
					array('entry_type'=> CustomerOrderType::class, 
						array(
							'restoTable' => $orderManagementService->getAllRestoTable(),
							'cashier' => $employeeManagementService->getEmployeeWhichIsAdmin())))
				*/->getForm();

		$this->resp['mealDir'] = 'bundles/images/meal/';
		$this->resp['activeCategoryId'] = $category->getCategoryId();
		$this->resp['orderDetailForm'] = $orderDetailForm->createView();
		$this->resp['listOfOrderedMeal'] = $listOfOrderedMeal;
		return $this->render("orders/order/check_out_the_order.html.twig", $this->resp);
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