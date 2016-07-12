<?php 
namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\TUser;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use AppBundle\Entity\Customer;

class CustomerController extends BaseController
{

	
	function __construct()
	{}

	public function indexAction()
	{
		$this->authSetup();
		$customers = $this->container->get('app.bundle.customer.management.service')->getAllCustomer();
        
		$this->resp["customers"] = $customers;
		return $this->render("administration/customer/index.html.twig", $this->resp);
	}

	public function addAction(Request $request)
	{
		$this->authSetup();
		$userService = $this->container->get('app.bundle.user.management.service');
		$customer = new Customer();
        	
        $form = $this->createFormBuilder($customer)
            ->add('personalId', TextType::class)
			->add('user', EntityType::class, array(
				    'class' => 'AppBundle:TUser',
				    'choices' => $userService->getAllCustomerUser(),
				    'choice_label' => 'username'))
            ->add('customerName', TextType::class)
            ->add('customerFullname', TextType::class)
            ->add('customerAddress', TextType::class)
            ->add('phoneNumber', TextType::class)
            ->add('email', TextType::class)
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
		    $newCustomer = $form->getData();
		    $date = date_create();

		    $newCustomer->setCustomerId("cust-".date_timestamp_get($date));//base64_encode(random_bytes(10)));
		    
		    $validator = $this->get('validator');
    		$errors = $validator->validate($newCustomer);

		    if (count($errors) > 0) {
		        $error = (string) $errors;
		    }
		    else
		    {
		    	$picture = $form['picture']->getData();
		    	$serverDir = $this->get('kernel')->getRootDir().'/../web/bundles/images/customer/';		    	
		    	
		    	$filename = $newCustomer->getCustomerId()."-".time().".".$picture->getClientOriginalExtension();
		    	$picture->move($serverDir, $filename);
		    	$newCustomer->setPicture($filename);
		        $this->container->get('app.bundle.customer.management.service')->addCustomer($newCustomer);
		        return $this->redirectToRoute("customerIndex");
		    } 
		}

        $this->resp["form"] = $form->createView();
        $this->resp["customer"] = $customer;
        $this->resp["act"] = "add";
        $this->resp['error'] = $error;
		return $this->render("administration/customer/customer_form.html.twig", $this->resp);
		
	}

	public function editAction($id,Request $request)
	{
		$this->authSetup();
		$error = "";
		$userService = $this->container->get('app.bundle.user.management.service');

		$customer = $this->container->get('app.bundle.customer.management.service')->getCustomerById($id);
        
        if (!$customer) {
	        $error = 'No customer found for customer id '.$id;   
	    }
        $form = $this->createFormBuilder($customer)
            ->add('personalId', TextType::class)
            ->add('user', EntityType::class, array(
				    'class' => 'AppBundle:TUser',
				    'choices' => $userService->getAllCustomerUser(),
				    'choice_label' => 'username'))
		            
            /*->add('userId', EntityType::class, array(
				    'class' => 'AppBundle:TUser',
				    'choices' => $userService->getAllCustomerUser(),
				    'choice_label' => 'username'))*/
            ->add('customerName', TextType::class)
            ->add('customerFullname', TextType::class)
            ->add('customerAddress', TextType::class)
            ->add('phoneNumber', TextType::class)
            ->add('email', TextType::class)
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
		    $modifiedCustomer = $form->getData();
		    
		    $validator = $this->get('validator');
    		$errors = $validator->validate($modifiedCustomer);

		    if (count($errors) > 0) {
		        $error = (string) $errors;
		    }
		    else
		    {
		        $picture = $form['picture']->getData();
		    	$serverDir = $this->get('kernel')->getRootDir().'/../web/bundles/images/customer/';		    	
		    	
		    	$filename = $customer->getCustomerId()."-".time().".".$picture->getClientOriginalExtension();
		    	$picture->move($serverDir, $filename);
		    	$modifiedCustomer->setPicture($filename);
		        $this->container->get('app.bundle.customer.management.service')->editCustomer($customer, $modifiedCustomer);
		        return $this->redirectToRoute("customerIndex");
		    }
		    
		} 
		else
		{
			
			$this->resp["form"] = $form->createView();
	        $this->resp["customer"] = $customer;
	        $this->resp["act"] = "edit";
	        $this->resp['error'] = $error;
			return $this->render("administration/customer/customer_form.html.twig", $this->resp);
		}

	}

	
	public function deleteAction($id)
	{
		$serverDir = $this->get('kernel')->getRootDir().'/../web/bundles/images/customer/';
		$picturePath = $this->container->get('app.bundle.customer.management.service')->getCustomerById($id)->getPicture();
		$this->container->get('app.bundle.customer.management.service')->deleteCustomer($id);
		unlink($serverDir.$picturePath);
		return $this->redirectToRoute("customerIndex");
	}

	
}
?>