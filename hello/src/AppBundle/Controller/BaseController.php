<?php 
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Service\AuthorizationService;
use Symfony\Component\DependencyInjection\ContainerInterface;

class BaseController extends Controller
{
	protected $userdata = array();
	protected $authService;
	function __construct()
	{
		$request = Request::createFromGlobals();

		//echo $request->getPathInfo();
		$this->authService = new AuthorizationService();
		

		// if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) 
		// {
		// 	//$this->userData['user'] = $this->getUser(); 
		// }

		// $this->userdata['menu'] = $authService->getMenu($this->userData['user']);
	}

	protected function AuthSetup()
	{
		if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) 
		{
			$this->userData['user'] = $this->getUser(); 
		}

		$this->userdata['menu'] = $this->authService->getMenu($this->userData['user']);

	}


}

?>