<?php 
namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use AppBundle\Entity\TUser;
use AppBundle\Entity\Employee;

class EmployeeController extends BaseController
{
	function __construct()
	{
		parent::__construct();
	}

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
        $errors = "";
        $form = $this->createFormBuilder($employee)
            ->add('personalId', TextType::class, array('required'=>false))
            ->add('employeeName', TextType::class)
            ->add('employeeFullname', TextType::class, array('required'=>false))
            ->add('employeeAddress', TextType::class, array('required'=>false))
            ->add('phoneNumber', TextType::class, array('required'=>false))
            ->add('email', TextType::class, array('required'=>false))
            ->add('picture', HiddenType::class, array('required'=>false))
            ->add('pictureFile', FileType::class, array(
            		'required'=>false,
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
		    $newEmployee = $form->getData();
		    $date = date_create();

		    $newEmployee->setEmployeeId("emp-".date_timestamp_get($date));//base64_encode(random_bytes(10)));
		    
		    $validator = $this->get('validator');
    		$errors = $validator->validate($newEmployee);

		    if (count($errors) == 0) {
		        $picture = $form['pictureFile']->getData();
		    	$serverDir = $this->get('kernel')->getRootDir().'/../web/bundles/images/employee/';		    	
		    	
		    	try
		    	{
		    		if($picture!=null)
		    		{
			    		$filename = $newEmployee->getEmployeeId()."-".time().".".$picture->getClientOriginalExtension();
			    		$picture->move($serverDir, $filename);
			    		$newEmployee->setPicture($filename);	
		    		}

		    		$this->container->get('app.bundle.employee.management.service')->addEmployee($newEmployee);
		        	$this->session->getFlashBag()->add('success', 'Add new employee is successful.');
					return $this->redirectToRoute("employeeIndex");
		    		
		    	}
		    	catch(\Exception $e)
		    	{
		    		$errors[0]['message'] = "Failed to upload picture.";
		    	}
		    	
		        
		    }
		}

        $this->resp["form"] = $form->createView();
        $this->resp["employee"] = $employee;
        $this->resp["act"] = "add";
        $this->resp['errors'] = $errors;
		return $this->render("administration/employee/employee_form.html.twig", $this->resp);
		
	}

	public function editAction($id,Request $request)
	{
		$this->authSetup();
		$errors = "";
		$userService = $this->container->get('app.bundle.user.management.service');

		$employee = $this->container->get('app.bundle.employee.management.service')->getEmployeeById($id);
        
        if (!$employee) {
	        $errors[0]['message'] = 'No employee found for employee id '.$id;   
	    }

        $form = $this->createFormBuilder($employee)
            ->add('personalId', TextType::class, array('required'=>false))
            ->add('employeeName', TextType::class)
            ->add('employeeFullname', TextType::class, array('required'=>false))
            ->add('employeeAddress', TextType::class, array('required'=>false))
            ->add('phoneNumber', TextType::class, array('required'=>false))
            ->add('email', TextType::class, array('required'=>false))
            ->add('picture', HiddenType::class, array('required'=>false))
            ->add('pictureFile', FileType::class, array(
            		'mapped' => false,
            		'required'=> false,
            		//'data_class' => null,
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

		    if (count($errors) == 0) {
		        $picture = $form['pictureFile']->getData();
		    	$serverDir = $this->get('kernel')->getRootDir().'/../web/bundles/images/employee/';		    	
		    	
		    	try
		    	{
		    		if($picture!=null)
		    		{
			    		$filename = $employee->getEmployeeId()."-".time().".".$picture->getClientOriginalExtension();
				    	$picture->move($serverDir, $filename);
				    	
				    	if($employee->getPicture()){
							try{
								unlink($serverDir.$employee->getPicture());
							}
							catch(\Exception $e){}
						}
				    	
				    	$modifiedEmployee->setPicture($filename);	
		    		}

		    		$this->container->get('app.bundle.employee.management.service')->editEmployee($employee, $modifiedEmployee);
		        	$this->session->getFlashBag()->add('success', 'Update employee is successful. Employee with id '.$id.' has been updated.');
		        	return $this->redirectToRoute("employeeIndex");
		    		
		    	}
		    	catch(\Exception $e)
		    	{
		    		$errors[0]['message'] = "Failed to upload picture.";
		    	}
		    }
		    
		} 
			
		$this->resp["form"] = $form->createView();
        $this->resp["employee"] = $employee;
        $this->resp["act"] = "edit";
        $this->resp['errors'] = $errors;
		return $this->render("administration/employee/employee_form.html.twig", $this->resp);
		

	}

	
	public function deleteAction($id)
	{
		$serverDir = $this->get('kernel')->getRootDir().'/../web/bundles/images/employee/';
		$picturePath = $this->container->get('app.bundle.employee.management.service')->getEmployeeById($id)->getPicture();
		
		$errorMessage = $this->container->get('app.bundle.employee.management.service')->deleteEmployee($id);
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
			
			$this->session->getFlashBag()->add('success', 'Delete employee is successful. Employee with id '.$id.' has been removed.');
		}
		
		return $this->redirectToRoute("employeeIndex");
	}

	
}
?>