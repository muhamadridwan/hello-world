<?php 
namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\TUser;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use AppBundle\Entity\Employee;

class EmployeeController extends BaseController
{

	
	function __construct()
	{}

	public function indexAction()
	{
		$this->authSetup();
		$employees = $this->container->get('app.bundle.employee.management.service')->getAllEmployee();
        
		$this->resp["employees"] = $employees;
		return $this->render("administration/employee/index.html.twig", $this->resp);
	}

	public function addAction(Request $request)
	{
		$this->authSetup();
		$userService = $this->container->get('app.bundle.user.management.service');
		$employee = new Employee();
        	
        $form = $this->createFormBuilder($employee)
            ->add('personalId', TextType::class)
            ->add('employeeName', TextType::class)
            ->add('employeeFullname', TextType::class)
            ->add('employeeAddress', TextType::class)
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
		    $newEmployee = $form->getData();
		    $date = date_create();

		    $newEmployee->setEmployeeId("emp-".date_timestamp_get($date));//base64_encode(random_bytes(10)));
		    
		    $validator = $this->get('validator');
    		$errors = $validator->validate($newEmployee);

		    if (count($errors) > 0) {
		        $error = (string) $errors;
		    }
		    else
		    {
		    	$picture = $form['picture']->getData();
		    	$serverDir = $this->get('kernel')->getRootDir().'/../web/bundles/images/employee/';		    	
		    	
		    	$filename = $newEmployee->getEmployeeId()."-".time().".".$picture->getClientOriginalExtension();
		    	$picture->move($serverDir, $filename);
		    	$newEmployee->setPicture($filename);
		        $this->container->get('app.bundle.employee.management.service')->addEmployee($newEmployee);
		        return $this->redirectToRoute("employeeIndex");
		    } 
		}

        $this->resp["form"] = $form->createView();
        $this->resp["employee"] = $employee;
        $this->resp["act"] = "add";
        $this->resp['error'] = $error;
		return $this->render("administration/employee/employee_form.html.twig", $this->resp);
		
	}

	public function editAction($id,Request $request)
	{
		$this->authSetup();
		$error = "";
		$userService = $this->container->get('app.bundle.user.management.service');

		$employee = $this->container->get('app.bundle.employee.management.service')->getEmployeeById($id);
        
        if (!$employee) {
	        $error = 'No employee found for employee id '.$id;   
	    }
        $form = $this->createFormBuilder($employee)
            ->add('personalId', TextType::class)
            ->add('employeeName', TextType::class)
            ->add('employeeFullname', TextType::class)
            ->add('employeeAddress', TextType::class)
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
		    $modifiedEmployee = $form->getData();
		    
		    $validator = $this->get('validator');
    		$errors = $validator->validate($modifiedEmployee);

		    if (count($errors) > 0) {
		        $error = (string) $errors;
		    }
		    else
		    {
		    	$picture = $form['picture']->getData();
		    	$serverDir = $this->get('kernel')->getRootDir().'/../web/bundles/images/employee/';		    	
		    	
		    	$filename = $employee->getEmployeeId()."-".time().".".$picture->getClientOriginalExtension();
		    	$picture->move($serverDir, $filename);
		    	$modifiedEmployee->setPicture($filename);

		        $this->container->get('app.bundle.employee.management.service')->editEmployee($employee, $modifiedEmployee);
		        return $this->redirectToRoute("employeeIndex");
		    }
		    
		} 
		else
		{
			
			$this->resp["form"] = $form->createView();
	        $this->resp["employee"] = $employee;
	        $this->resp["act"] = "edit";
	        $this->resp['error'] = $error;
			return $this->render("administration/employee/employee_form.html.twig", $this->resp);
		}

	}

	
	public function deleteAction($id)
	{
		$picturePath = $this->container->get('app.bundle.employee.management.service')->getEmployeeById($id);
		$this->container->get('app.bundle.employee.management.service')->deleteEmployee($id);
		return $this->redirectToRoute("employeeIndex");
	}

	
}
?>