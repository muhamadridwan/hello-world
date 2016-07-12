<?php 

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use AppBundle\Entity\Customer;

class RestoTableController extends BaseController
{

	
	function __construct()
	{}

	public function indexAction()
	{
		$this->authSetup();
		$restoTable = $this->container->get('app.bundle.customer.management.service')->getAllRestoTable();
        
		$this->resp["restoTable"] = $restoTable;
		return $this->render("configuration/resto_table/index.html.twig", $this->resp);
	}

	public function addAction(Request $request)
	{
		$this->authSetup();
		$customer = new Customer();
        	
        $form = $this->createFormBuilder($customer)
            ->add('customerName', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Save'))
            ->getForm();
		$error = "";

		if($request->getMethod()=='POST')
		{

		    $form->handleRequest($request);
		    $newCustomer = $form->getData();
		    $date = date_create();

		    $newCustomer->setCustomerId("cust-".date_timestamp_get($date));//base64_encode(random_bytes(10)));
		    $newCustomer->setIsRestoTable(true);

		    $validator = $this->get('validator');
    		$errors = $validator->validate($newCustomer);

		    if (count($errors) > 0) {
		        $error = (string) $errors;
		    }
		    else
		    {
		    	$this->container->get('app.bundle.customer.management.service')->addCustomer($newCustomer);
		        return $this->redirectToRoute("restoTableIndex");
		    } 
		}

        $this->resp["form"] = $form->createView();
        $this->resp["customer"] = $customer;
        $this->resp["act"] = "add";
        $this->resp['error'] = $error;
		return $this->render("configuration/resto_table/resto_table_form.html.twig", $this->resp);
		
	}

	public function editAction($id,Request $request)
	{
		$this->authSetup();
		$error = "";

		$customer = $this->container->get('app.bundle.customer.management.service')->getCustomerById($id);
        
        if (!$customer) {
	        $error = 'No customer found for customer id '.$id;   
	    }
        $form = $this->createFormBuilder($customer)
            ->add('customerName', TextType::class)
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
		        $this->container->get('app.bundle.customer.management.service')->editCustomer($customer, $modifiedCustomer);
		        return $this->redirectToRoute("restoTableIndex");
		    }
		    
		} 
		else
		{
			
			$this->resp["form"] = $form->createView();
	        $this->resp["customer"] = $customer;
	        $this->resp["act"] = "edit";
	        $this->resp['error'] = $error;
			return $this->render("configuration/resto_table/resto_table_form.html.twig", $this->resp);
		}

	}

	
	public function deleteAction($id)
	{
		$this->container->get('app.bundle.customer.management.service')->deleteCustomer($id);
		return $this->redirectToRoute("customerIndex");
	}

	
}
?>