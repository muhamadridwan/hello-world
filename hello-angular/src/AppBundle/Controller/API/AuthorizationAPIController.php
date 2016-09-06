<?php 

namespace AppBundle\Controller\API;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\MealCategory;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class AuthorizationAPIController extends BaseAPIController
{
	function __construct()
	{
		parent::__construct();
	}

	public function getAuthorizationTokenAction(Request $request)
	{
		
		if($request->getMethod() == "POST")
		{
			$data = json_decode($request->getContent(), true);
			
			$user = $this->container->get('app.bundle.user.management.service')->getUserByUsername($data["username"]);

			if ($user) 
		    {
		    	$encoder = $this->container->get('security.password_encoder');
				if($encoder->isPasswordValid($user, $data["password"])){

					$token = $this->get('lexik_jwt_authentication.encoder')
            ->encode(['username' => $user->getUsername()]);
            		$user->setValidToken($token);
            		$this->container->get('app.bundle.user.management.service')->editUser($user, $user);
            		
            		$this->setupUserData($user);
            		$this->resp["token"] = $token;
					$this->response->setStatusCode(200);
					$resp = json_decode($this->toJson($this->resp));
					//var_dump($resp);
					$this->response->setData($resp);
				}
				else
				{
					$this->response->setStatusCode(401, "Password is not valid.");
				}
		    }
		    else
			{
				$this->response->setStatusCode(401, "User doesn't exist.");
			}

		}
		else
		{
			$this->response->setStatusCode(405, "It is only available on POST.");
		}
		
        return $this->response;
	}

	public function removeAuthorizationTokenAction(Request $request)
	{

		if($request->getMethod() == "POST")
		{
			if($this->isTokenValid($request))
			{
				$user = $this->authUser;
				$user->setValidToken("");
	    		$this->container->get('app.bundle.user.management.service')->editUser($user, $user);

	    		$this->response->setStatusCode(200);
			}
		}
		else
		{
			$this->response->setStatusCode(405, "It is only available on POST.");
		}
		
        return $this->response;
	}
}