<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MealCategoryController extends BaseController
{
	public function indexAction()
	{
		$this->authSetup();
		$users = $this->getDoctrine()
        ->getRepository('AppBundle:TUser')->findAll('Agus');
        
		$this->resp["users"] = $users;
		return $this->render("user/index.html.twig", $this->resp);
	}

}

?>