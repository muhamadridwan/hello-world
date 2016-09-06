<?php 
namespace AppBundle\Controller\API;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Service\AuthorizationService;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class BaseAPIController extends Controller
{
	protected $authUser;
	protected $userData = array();
	protected $resp = array();
	protected $response;
	
	function __construct()
	{
		$this->response = new JsonResponse();
		$this->response->setStatusCode(500);
	}

	protected function isTokenValid(Request $request)
	{
		$token = $this->get('app.jwt_token_authenticator')->getCredentials($request);
        $data = $this->get('lexik_jwt_authentication.encoder')->decode($token);

			
		$user = $this->container->get('app.bundle.user.management.service')->getUserByUsername($data["username"]);
		
		if($user) 
	    {
	    	if($user->getValidToken() == $token)
	    	{
	    		$this->setupUserData($user);
	    		$this->authUser = $user;
				$this->resp['userData'] = $this->userData;
	    		return true;
	    	}
	    	else
	    	{

	    		$this->response->setStatusCode(401, "Token is not valid.");
	    		return false;		
	    	}
	    		
	    }
	    else
		{
			$this->response->setStatusCode(401, "The user is not authenticated.");
			return false;
		}

	}

	protected function toObject($jData, $class)
	{
		$encoders = array(new XmlEncoder(), new JsonEncoder());
		$normalizers = array(new ObjectNormalizer());
		$serializer = new Serializer($normalizers, $encoders);
	    
	    return $serializer->deserialize($data, $class, 'json');
	}

	protected function toJson($obj)
	{
		$encoders = array(new XmlEncoder(), new JsonEncoder());
		$normalizers = array(new ObjectNormalizer());

		$serializer = new Serializer($normalizers, $encoders);

		return $serializer->serialize($obj, 'json');

	}

	protected function setupUserData($user){

		$this->userData['menu'] = $this->container->get('app.bundle.authorization.service')->getMenu($user->getUserGroup()->getUserGroupID());
	    		$this->authUser = $user;
				$this->resp['userData'] = $this->userData;
	    		
	}
}

?>