<?php 
namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\TUser;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use AppBundle\Entity\Customer;

class CustomerController extends BaseController
{
	function __construct()
	{
		parent::__construct();
	}

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
		$errors = "";

        $form = $this->createFormBuilder($customer)
            ->add('personalId', TextType::class, array('required'=>false))
			->add('user', EntityType::class, array(
				    'class' => 'AppBundle:TUser',
				    'choices' => $userService->getAllCustomerUser(),
				    'choice_label' => 'username'))
            ->add('customerName', TextType::class)
            ->add('customerFullname', TextType::class, array('required'=>false))
            ->add('customerAddress', TextType::class, array('required'=>false))
            ->add('phoneNumber', TextType::class, array('required'=>false))
            ->add('email', TextType::class, array('required'=>false))
            ->add('picture', HiddenType::class, array('required'=>false))
            ->add('pictureFile', FileType::class, array(
            		'required' => false,
            		'mapped' => false,
            		'attr' => array(
            			'class'=> 'uploadfile',
            			'elm-view' => '#cust-pic-preview'
            			)))
            ->add('save', SubmitType::class, array('label' => 'Save'))
            ->getForm();
		

		if($request->getMethod()=='POST')
		{

		    $form->handleRequest($request);
		    $newCustomer = $form->getData();
		    $date = date_create();

		    $newCustomer->setCustomerId("cust-".date_timestamp_get($date));//base64_encode(random_bytes(10)));
		    
		    $validator = $this->get('validator');
    		$errors = $validator->validate($newCustomer);

		    if (count($errors) == 0) {
		        $picture = $form['pictureFile']->getData();
		    	$serverDir = $this->get('kernel')->getRootDir().'/../web/bundles/images/customer/';		    	
		    	
		    	try
		    	{
		    		if($picture!=null)
		    		{
		    			$filename = $newCustomer->getCustomerId()."-".time().".".$picture->getClientOriginalExtension();
				    	$picture->move($serverDir, $filename);
				    	$newCustomer->setPicture($filename);	
		    		}

		    		$this->container->get('app.bundle.customer.management.service')->addCustomer($newCustomer);
		        	$this->session->getFlashBag()->add('success', 'Add new customer is successful.');
					return $this->redirectToRoute("customerIndex");
		        	
		    	}
		    	catch(\Exception $e)
		    	{
		    		$errors[0]['message'] = "Failed to upload picture.";
		    	}
		        
		    }
		}

        $this->resp["form"] = $form->createView();
        $this->resp["customer"] = $customer;
        $this->resp["act"] = "add";
        $this->resp['errors'] = $errors;
		return $this->render("administration/customer/customer_form.html.twig", $this->resp);
		
	}

	public function editAction($id,Request $request)
	{
		$this->authSetup();
		$errors = "";
		$userService = $this->container->get('app.bundle.user.management.service');

		$customer = $this->container->get('app.bundle.customer.management.service')->getCustomerById($id);
        
        if (!$customer) {
	        $errors[0]['message'] = 'No customer found with id '.$id;  
	    }

        $form = $this->createFormBuilder($customer)
        	->add('personalId', TextType::class, array('required'=>false))
			->add('user', EntityType::class, array(
				    'class' => 'AppBundle:TUser',
				    'choices' => $userService->getAllCustomerUser(),
				    'choice_label' => 'username'))
            ->add('customerName', TextType::class)
            ->add('customerFullname', TextType::class, array('required'=>false))
            ->add('customerAddress', TextType::class, array('required'=>false))
            ->add('phoneNumber', TextType::class, array('required'=>false))
            ->add('email', TextType::class, array('required'=>false))
            ->add('picture', HiddenType::class, array('required'=>false))
            ->add('pictureFile', FileType::class, array(
            		'required' => false,
            		'mapped' => false,
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

		    if (count($errors) == 0) {
		        $picture = $form['pictureFile']->getData();
		    	$serverDir = $this->get('kernel')->getRootDir().'/../web/bundles/images/customer/';		    	
		    	
		    	try
		    	{
		    		if($picture!=null)
		    		{
		    			$filename = $customer->getCustomerId()."-".time().".".$picture->getClientOriginalExtension();
				    	$picture->move($serverDir, $filename);

				    	if($customer->getPicture()){
							try{
								unlink($serverDir.$customer->getPicture());
							}
							catch(\Exception $e){}
						}
						
				    	$modifiedCustomer->setPicture($filename);	
		    		}

		    		$this->container->get('app.bundle.customer.management.service')->editCustomer($customer, $modifiedCustomer);
		        	$this->session->getFlashBag()->add('success', 'Update customer is successful. Customer with id '.$id.' has been updated.');
					return $this->redirectToRoute("customerIndex");
		        	
		    	}
		    	catch(\Exception $e)
		    	{
		    		$errors[0]['message'] = "Failed to upload picture.";
		    	}
		    }
		    
		}
			
		$this->resp["form"] = $form->createView();
        $this->resp["customer"] = $customer;
        $this->resp["act"] = "edit";
        $this->resp['errors'] = $errors;
		return $this->render("administration/customer/customer_form.html.twig", $this->resp);
		

	}

	
	public function deleteAction($id)
	{
		$serverDir = $this->get('kernel')->getRootDir().'/../web/bundles/images/customer/';
		$picturePath = $this->container->get('app.bundle.customer.management.service')->getCustomerById($id)->getPicture();
		
		$errorMessage = $this->container->get('app.bundle.customer.management.service')->deleteCustomer($id);
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
			
			$this->session->getFlashBag()->add('success', 'Delete customer is successful. Customer with id '.$id.' has been removed.');
		}

		return $this->redirectToRoute("customerIndex");
	}

	
}
?>