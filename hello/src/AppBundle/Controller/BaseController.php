<?php 
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Service\AuthorizationService;
use Symfony\Component\HttpFoundation\Session\Session;

class BaseController extends Controller
{
	protected $userData = array();
	protected $resp = array();
	protected $maxData = 10;
	protected $session;
	function __construct()
	{
		$this->session = new Session();
		//$this->maxData = $this->container->getParameter('max_data');
	}

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