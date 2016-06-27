<?php 
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

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
		if($request->getMethod()=='POST')
		{
			$error = '';
			$username = $request->request->get("username");
			$passwd = $request->request->get("password");
			$em = $this->getDoctrine()->getManager();
		    $user = $em->getRepository('AppBundle:TUser')->find($username);
		    if (!$user) {
		        $error =
		            'Invalide username '.$username;
		    }

		    if($user->getPassword()!=$passwd)
		    {
		    	$error =
		            'Invalide password.';
		    }
		    else
		    {
		    	return redirectToRoute("homepage");
		    }

		} 
		$this->resp['error'] = $error;
		$this->resp['last_username'] = $last_username;
		return $this->render("login.html.twig", $this->resp);
	
	    
	}

	public function encodePasswordAction($password, Request $request)
	{
		$user = new TUser();
		
		$encoder = $this->container->get('security.password_encoder');
		$encoded = $encoder->encodePassword($user, $password);
		return new Response($encoded);
	}
}

?>