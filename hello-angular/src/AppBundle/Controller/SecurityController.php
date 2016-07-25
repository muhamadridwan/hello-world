<?php 
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use AppBundle\Entity\TUser;

class SecurityController extends BaseController
{
	function __construct()
	{
		parent::__construct();
	}
	
	public function loginAction(Request $request)
	{
		$this->authSetup();
		$authenticationUtils = $this->get('security.authentication_utils');
		$error = $authenticationUtils->getLastAuthenticationError();
		$last_username = $authenticationUtils->getLastUsername();
		/**/
		if($request->getMethod()=='POST')
		{
			//var_dump($passwd."  ".$user->getPassword());
		    //die;
			$username = $request->request->get("username");
			$passwd = $request->request->get("password");
			$em = $this->getDoctrine()->getManager();
		    $user = $em->getRepository('AppBundle:TUser')->find($username);

		    if ($user) 
		    {
		        if($user->getPassword()==$passwd)
			    {
			    	return redirectToRoute("homepage");
			    }
		    }
		} 
		$this->resp['error'] = $error;
		$this->resp['last_username'] = $last_username;
		return $this->render("login.html.twig", $this->resp);
	
	    
	}

	public function encodePasswordAction($password, Request $request)
	{
		return new Response($this->encodePassword($password));
	}

	private function encodePassword($password)
	{
		$user = new TUser();
		$encoder = $this->container->get('security.password_encoder');
		$encoded = $encoder->encodePassword($user, $password);
		return $encoded;
	}

	private function isPasswordValid($user, $password)
	{
		$encoder = $this->container->get('security.password_encoder');
		return $encoder->isPasswordValid($user, $password);
	}

	private function dencodePassword($password)
	{
		$user = new TUser();
		$dencoder = $this->container->get('security.password_encoder');
		$dencoded = $dencoder->getPlainPassword($user, $password);
		return $dencoded;
	}

	public function changePasswordIndexAction(Request $request)
	{
		$this->authSetup();
		$user = $this->getUser();
		$errors = array();
		if (!$user) {
	        $errors[0]['message'] = 'No user defined. Please login.';   
	    }

        $form = $this->createFormBuilder()
            ->add('currentPassword', TextType::class)
            ->add('newPassword', TextType::class)
            ->add('retypeNewPassword', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Change Password'))
            ->getForm();
		
		if($request->getMethod()=='POST')
		{
		    $form->handleRequest($request);
		    $data = $form->getData();
		    $currentPassword = $user->getPassword();
		    //var_dump($this->encodePassword($data['currentPassword'], $user)."  ".$user->getPassword());
		    if($this->isPasswordValid($user, $data['currentPassword']))
		    {
		    	if($data['newPassword']==$data['retypeNewPassword'])
		    	{
		    		$dbUser = $this->container->get('app.bundle.user.management.service')->getUserById($user->getId());
		    		
		    		$this->getUser()->setPassword($this->encodePassword($data['newPassword']));
		    		$validator = $this->get('validator');
    				$errors = $validator->validate($this->getUser());

    				if (count($errors) == 0) {
				        $this->container->get('app.bundle.user.management.service')->editUser($dbUser, $this->getUser());
				        $this->session->getFlashBag()->add('success', 'Change password is successful. Your password has been changed.');
				    }
				    else
				    {
				    	$this->getUser()->setPassword($currentPassword);
				    }
		    	}
		    	else
		    	{
		    		array_push($errors, array('message'=>'You have to confirm your password.'));
		    	}
		    }
		    else
		    {
		    	array_push($errors, array('message'=>'Your password is wrong.'));
		    }
		    
		}
			
		$this->resp["form"] = $form->createView();
        $this->resp['errors'] = $errors;
		return $this->render("my_profile/change_password.html.twig", $this->resp);
	}

	public function saveNewPasswordAction()
	{

	}
}

?>