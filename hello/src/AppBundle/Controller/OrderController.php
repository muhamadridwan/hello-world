<?php 
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class OrderController extends BaseController
{
	function __construct()
	{
		parent::__construct();
	}

	public function orderIndexAction()
	{
		return new Response("Sorry, Order page is under construction.");
	}

	public function activeOrderIndexAction()
	{
		return new Response("Sorry, Active Order page is under construction.");
	}

	public function historyIndexAction()
	{
		return new Response("Sorry, history Order page is under construction.");
	}
}


?>