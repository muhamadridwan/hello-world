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
		$response = new JsonResponse();
		$response->setStatusCode(500);

		if($request->getMethod() == "POST")
		{
			$data = json_decode($request->getContent(), true);
			//var_dump($data);
			$user = $this->container->get('app.bundle.user.management.service')->getUserByUsername($data["username"]);

			if ($user) 
		    {
		    	$encoder = $this->container->get('security.password_encoder');
				if($encoder->isPasswordValid($user, $data["password"])){

					$token = $this->get('lexik_jwt_authentication.encoder')
            ->encode(['username' => $user->getUsername()]);
            		$user->setValidToken($token);
            		$this->container->get('app.bundle.user.management.service')->editUser($user, $user);

            		$resp["token"] = $token;
					$response->setStatusCode(200);
					$response->setData($resp);
				}
				else
				{
					$response->setStatusCode(401, "Password is not valid.");
				}
		    }
		    else
			{
				$response->setStatusCode(401, "User doesn't exist.");
			}

		}
		else
		{
			$response->setStatusCode(405, "It is only available on POST.");
		}
		
        return $response;
	}

	public function removeAuthorizationTokenAction(Request $request)
	{

		
		$response = new JsonResponse();
		$response->setStatusCode(500);

		if($request->getMethod() == "POST")
		{
			
			$token = $this->get('app.jwt_token_authenticator')->getCredentials($request);
        	$data = $this->get('lexik_jwt_authentication.encoder')->decode($token);

			//$data = json_decode($data, true);


			//var_dump($data);
			$user = $this->container->get('app.bundle.user.management.service')->getUserByUsername($data["username"]);
			
			if ($user) 
		    {
		    	if($user->getValidToken() == $token)
		    	{
		    		$user->setValidToken("");
		    		$this->container->get('app.bundle.user.management.service')->editUser($user, $user);

		    		$response->setStatusCode(200);
		    	}
		    	else
		    	{
		    		$response->setStatusCode(401, "Token is not valid.");		
		    	}
		    		
		    }
		    else
			{
				$response->setStatusCode(401, "User doesn't exist.");
			}
		    	

		}
		else
		{
			$response->setStatusCode(405, "It is only available on POST.");
		}
		
        return $response;
	}
}