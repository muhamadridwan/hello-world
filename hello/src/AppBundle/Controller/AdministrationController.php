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


	public function customerIndexAction()
	{
		return new Response("Sorry, this page is under construction.");
	}

	public function adminIndexAction()
	{
		return new Response("Sorry, this page is under construction.");
	}

	public function employeeIndexAction()
	{
		return new Response("Sorry, this page is under construction.");
	}

}


?>