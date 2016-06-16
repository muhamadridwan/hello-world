<?php 
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdministrationController extends BaseController
{
	function __construct()
	{
		parent::__construct();
	}

	public function userIndexAction()
	{
		$this->authSetup();
		$users = $this->getDoctrine()
        ->getRepository('AppBundle:TUser')->findAll('Agus');
        
		$this->resp["users"] = $users;
		return $this->render("user/index.html.twig", $this->resp);
	}

	public function customerIndexAction()
	{
		return new Response("Sorry, this page is under construction.");
	}
}


?>