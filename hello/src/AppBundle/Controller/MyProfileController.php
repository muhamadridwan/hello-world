<?php 
namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Entity\TUser;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use AppBundle\Repository\UserRepository;

class MyProfileController extends BaseController
{

	private $userService;
	function __construct()
	{
		parent::__construct();

	}

	public function indexAction()
	{
		$this->authSetup();
		$users = $this->getDoctrine()
        ->getRepository('AppBundle:TUser')->findAll('Agus');
        
		$this->resp["users"] = $users;
		return $this->render("user/index.html.twig", $this->resp);
	}

	

	public function editAction($id,Request $request)
	{


		$this->authSetup();
		$error = "";

		$user = $this->container->get('app.bundle.user.management.service')->getUserById($id);
        if (!$user) {
	        $error = 'No user found for username '.$id;   
	    }
        $form = $this->createFormBuilder($user)
            ->add('username', TextType::class)
            ->add('userGroup', EntityType::class, array(
				    // query choices from this entity
				    'class' => 'AppBundle:TUserGroup',
				    // use the User.username property as the visible option string
				    'choice_label' => 'userGroupName'))
            ->add('email', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Save'))
            ->getForm();
		
		if($request->getMethod()=='POST')
		{
		    $form->handleRequest($request);
		    $newUser = $form->getData();
		    
		    $validator = $this->get('validator');
    		$errors = $validator->validate($newUser);

		    if (count($errors) > 0) {
		        $error = (string) $errors;
		    }
		    else
		    {
		        $this->container->get('app.bundle.user.management.service')->editUser($user, $newUser);
		        return $this->redirectToRoute("userIndex");
		    }
		    
		} 
		else
		{
			
			$this->resp["form"] = $form->createView();
	        $this->resp["user"] = $user;
	        $this->resp["act"] = "edit";
	        $this->resp['error'] = $error;
			return $this->render("user/user_form.html.twig", $this->resp);
		}

	}

	
	

	
}
?>