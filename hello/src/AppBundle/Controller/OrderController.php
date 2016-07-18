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
use AppBundle\Form\Type\CustomerOrderType;
use AppBundle\Form\Type\CheckoutDetailType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

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

	public function pickTheMealAction($category_id, Request $request)
	{
		$this->authSetup();
		$orderManagementService = $this->container->get('app.bundle.order.management.service');
		
		$listOfOrderedMeal = $this->session->get('listOfOrderedMeal', array());
		$category = $orderManagementService->getMealCategoryById($category_id);
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
	
	public function checkOutTheOrdersAction(Request $request)
	{
		$this->authSetup();
		$orderManagementService = $this->container->get('app.bundle.order.management.service');
		$employeeManagementService = $this->container->get('app.bundle.employee.management.service');
		
		$listOfOrderedMeal = $this->session->get('listOfOrderedMeal', array());
		$custOrder = $orderManagementService->getDineInOrder($listOfOrderedMeal);
		$custOrder['custOrder'][0]->setCashier($employeeManagementService->getEmployeeByUser($this->getUser()));
		
		$custOrderForm = $this->createFormBuilder($custOrder)
				->add('orderDetail', CollectionType::class, array('entry_type'=> OrderDetailType::class, 'entry_options'=> array('meals'=> $orderManagementService->getAllMeal()))) 
				->add('custOrder', CollectionType::class, 
					array('entry_type'=> CustomerOrderType::class,
						'entry_options'=> array(
							'restoTable' => $orderManagementService->getAllRestoTable(),
							'cashier' => $employeeManagementService->getEmployeeWhichIsAdmin()) 
						))
				->add('save', SubmitType::class, array('label' => 'Check Out',
					'attr' => array(
						'class'=>'btn btn-primary pull-right',
						'style'=>'margin-right:10px;'
						)))
				->getForm();

		if($request->getMethod()=='POST')
		{
		    $custOrderForm->handleRequest($request);
			$formData = $custOrderForm->getData();
			$orderManagementService->saveOrder($formData);
		    $this->session->remove('listOfOrderedMeal');
			return $this->redirectToRoute('activeOrderIndex');
		}
		//$this->resp['activeCategoryId'] = $category->getCategoryId();
		$this->resp['custOrderForm'] = $custOrderForm->createView();
		$this->resp['listOfOrderedMeal'] = $listOfOrderedMeal;
		return $this->render("orders/order/check_out_the_orders.html.twig", $this->resp);
	}

	public function activeOrderIndexAction($order_status, Request $request)
	{
		$this->authSetup();

		$activeOrderMenu = array();
		$activeOrderMenu[0] = "New Order";
		$activeOrderMenu[2] = "On Cooking";
		$activeOrderMenu[4] = "Served Order";

		$orderManagementService = $this->container->get('app.bundle.order.management.service');
		//var_dump($customer_order_id);
		$this->resp['activeOrders'] = $orderManagementService->getOrderByStatus($order_status);
		$this->resp['activeOrderMenus'] = $activeOrderMenu;
		$this->resp['orderStatus'] = $order_status;
		
		return $this->render("orders/active_order/index.html.twig", $this->resp);
	}

	public function cooksTheFoodAction($customer_order_id)
	{
		$this->authSetup();
		$this->container->get('app.bundle.order.management.service')->cooksTheFood($customer_order_id);
		return $this->redirectToRoute('activeOrderIndex', array('order_status'=>2));
	}

	public function servesTheFoodAction($customer_order_id)
	{
		$this->authSetup();
		$this->container->get('app.bundle.order.management.service')->servesTheFood($customer_order_id);
		return $this->redirectToRoute('activeOrderIndex', array('order_status'=>4));
	}
	
	public function paymentAction($customer_order_id, Request $request)
	{
		$this->authSetup();
		$orderManagementService = $this->container->get('app.bundle.order.management.service');
		
		$custOrderData = $orderManagementService->getOrderDetailByOrderId($customer_order_id);
		//$custOrder['custOrder'][0]->setCashier($employeeManagementService->getEmployeeByUser($this->getUser()));
		
		//$this->resp['activeCategoryId'] = $category->getCategoryId();
		$this->resp['custOrderData'] = $custOrderData;
		//var_dump($custOrderData);
		return $this->render("orders/active_order/payment_confirmation.html.twig", $this->resp);
	}
	
	public function confirmPaymentAction($customer_order_id, Request $request)
	{
		$this->authSetup();
		$orderManagementService = $this->container->get('app.bundle.order.management.service');
		$employeeManagementService = $this->container->get('app.bundle.employee.management.service');
		
		$admin = $employeeManagementService->getEmployeeByUser($this->getUser());
		if($admin != null)
		{
			setTransactionDone($customer_order_id, $admin);
			return $this->redirectToRoute('activeOrderIndex', array('order_status'=>4));
		}
		else
		{
			$this->resp['error'] = "You must be login as admin to confirm the payment.";
			$orderManagementService = $this->container->get('app.bundle.order.management.service');
		
			$custOrderData = $orderManagementService->getOrderDetailByOrderId($customer_order_id);
			$this->resp['custOrderData'] = $custOrderData;
			return $this->render("orders/active_order/payment_confirmation.html.twig", $this->resp);
		}
		
	}

	public function historyIndexAction()
	{
		return new Response("Sorry, history Order page is under construction.");
	}
}


?>