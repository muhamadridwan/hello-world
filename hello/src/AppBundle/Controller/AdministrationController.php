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

class AdministrationController extends BaseController
{
	function __construct()
	{
		parent::__construct();
	}

	public function usergroupIndex()
	{
		return new Response("sorry, this page is under construction.");
	}

	public function userPrivilegeIndex()
	{
		return new Response("sorry, this page is under construction.");
	}

	public function adminIndexAction()
	{
		$this->authSetup();
		$employees = $this->container->get('app.bundle.employee.management.service')->getEmployeeWhichIsAdmin();
        
		$this->resp["employees"] = $employees;
		return $this->render("administration/admin/index.html.twig", $this->resp);
	}

	public function addAdminAction(Request $request)
	{
		$this->authSetup();
		$userService = $this->container->get('app.bundle.user.management.service');
		$employeeService = $this->container->get('app.bundle.employee.management.service');
		
        $form = $this->createFormBuilder()
            ->add('user', EntityType::class, array(
				    'class' => 'AppBundle:TUser',
				    'choices' => $userService->getAllAdminUser(),
				    'choice_label' => 'username'))
            ->add('employee', EntityType::class, array(
				    'class' => 'AppBundle:Employee',
				    'choices' => $employeeService->getEmployeeWhichIsNotAdmin(),
				    'choice_label' => function ($employee) {
								        return $employee->getEmployeeFullname();
								    }))
            
            ->add('save', SubmitType::class, array('label' => 'Save'))
            ->getForm();
		$error = "";

		if($request->getMethod()=='POST')
		{

		    $form->handleRequest($request);
		    $data = $form->getData();
		    $user = $data['user'];
		    $employee = $data['employee'];
	    	$this->container->get('app.bundle.employee.management.service')->setUser($employee->getEmployeeId(), $user);
	        return $this->redirectToRoute("adminIndex");
	     
		}

        $this->resp["form"] = $form->createView();
        $this->resp['error'] = $error;
		return $this->render("administration/admin/admin_form.html.twig", $this->resp);
		
	}
	
	public function deleteAdminAction($id)
	{
		$this->container->get('app.bundle.employee.management.service')->SetUser($id, null);
		return $this->redirectToRoute("employeeIndex");
	}
	
}


?>