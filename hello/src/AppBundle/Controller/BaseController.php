<?php 
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Service\AuthorizationService;

class BaseController extends Controller
{
	protected $userData = array();
	protected $resp = array();
	protected $authService;
	protected $container;
	function __construct()
	{}

	protected function authSetup()
	{
		$userGroupID = "ROLE_ANONYMOUS";
		if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) 
		{
			$this->userData['user'] = $this->getUser();
			$userGroupID = $this->userData['user']->getUserGroup()->getUserGroupID();
		}

		$this->userData['menu'] = $this->container->get('app.bundle.authorization.service')->getMenu($userGroupID);

		$this->resp['userData'] = $this->userData;
	}
}

?>