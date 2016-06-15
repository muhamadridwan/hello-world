<?php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class HelloController extends BaseController
{
	function __construct()
	{
		parent::__construct();
	}
	/**
	* @Route("/hello/{name}", name="hello")
	*/
	public function indexAction()
	{
		return new Response("hello ");
	}

	/**
	* @Route("hell/tes/", name="hellohello")
	*/
	public function tesAction()
	{
		return new Response("Hello.");		
	}
}
?>