<?php 
namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Entity\TUser;



class UserController extends Controller
{
	function __construct()
	{}


	/**
	* @Route("user/", name="userIndex")
	*/
	public function indexAction()
	{
		$users = $this->getDoctrine()
        ->getRepository('AppBundle:TUser')->findAll('Agus');
        
		//return new JsonResponse($users);
		//die();
		return $this->render("user/index.html.twig", array("users"=> $users));
	}

	/**
	* @Route("user/add/", name="addUser")
	* @Method({"GET","POST"})
	*/
	public function addAction(Request $request)
	{
		//$request = Request::createFromGlobals();
		if($request->getMethod()=='POST')
		{

			$user = new TUser();
		    
			$image = $request->files->get('picture');
		    if($image)
		    {
		    	$fileName = $image->getClientOriginalName();
		    	$image->move($this->get('kernel')->getRootDir().'/../web/bundles/images/user/', $fileName);

		    	$user->setPicture($fileName);
		    
		    }


			$user->setUsername($request->request->get("username"));
		    $user->setFullname($request->request->get('fullname'));
		    //$user->setAddress('Cigarukgak');
		    $user->setPhoneNumber($request->request->get('phoneNumber'));
		    //$user->setEmail('bukanagusbiasa@biasaaja.com');
		    
		    $em = $this->getDoctrine()->getManager();
		    $em->persist($user);

		    $em->flush();

		    return $this->redirectToRoute("userIndex");
		} 
		else
		{
			return $this->render("user/user_form.html.twig", array("user"=> new T_User(),"act" => "add"));
		}
	    
		
	}

	/**
	* @Route("user/edit/{id}", name="editUser")
	* @Method({"GET","POST"})
	*/
	public function editAction($id,Request $request)
	{

		//$request = Request::createFromGlobals();
		if($request->getMethod()=='POST')
		{

			$em = $this->getDoctrine()->getManager();
		    $user = $em->getRepository('AppBundle:TUser')->find($id);
		    if (!$user) {
		        throw $this->createNotFoundException(
		            'No product found for username '.$id
		        );
		    }


			$image = $request->files->get('picture');
		    if($image)
		    {
		    	$fileName = $image->getClientOriginalName();
		    	$image->move($this->get('kernel')->getRootDir().'/../web/bundles/images/user/', $fileName);

		    	$user->setPicture($fileName);
		    
		    }
		    
			
		    $user->setUsername($request->request->get("username"));
		    $user->setFullname($request->request->get('fullname'));
		    //$user->setAddress('Cigarukgak');
		    $user->setPhoneNumber($request->request->get('phoneNumber'));
		    //$user->setEmail('bukanagusbiasa@biasaaja.com');
		    
		    $em->flush();

		    return $this->redirectToRoute("userIndex");
		} 
		else
		{
			$em = $this->getDoctrine()->getManager();
		    $user = $em->getRepository('AppBundle:TUser')->find($id);

		    if (!$user) {
		        throw $this->createNotFoundException(
		            'No product found for username '.$id
		        );
		    }
			return $this->render("user/user_form.html.twig", array("user"=> $user,"act" => "edit"));
		}

	}

	/**
	* @Route("user/del/{id}", name="deleteUser")
	*/
	public function delAction($id)
	{
		$em = $this->getDoctrine()->getManager();
		$user = $em->getRepository('AppBundle:TUser')->find($id);
		$em->remove($user);
		$em->flush();

		return $this->redirectToRoute("userIndex");
	}

	
}
?>