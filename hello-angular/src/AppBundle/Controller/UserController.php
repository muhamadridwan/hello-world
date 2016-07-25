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

class UserController extends BaseController
{

	private $userService;
	function __construct()
	{
		parent::__construct();

	}

	public function indexAction()
	{
		$this->authSetup();
		$users = $this->container->get('app.bundle.user.management.service')->getAllUser();
        
		$this->resp["users"] = $users;
		return $this->render("administration/user/index.html.twig", $this->resp);
	}

	public function addAction(Request $request)
	{
		$this->authSetup();
		$user = new TUser();
		$errors = "";

        $form = $this->createFormBuilder($user)
            ->add('username', TextType::class)
            ->add('userGroup', EntityType::class, array(
				    'class' => 'AppBundle:TUserGroup',
				    'choice_label' => 'userGroupName'))
            ->add('email', TextType::class, array('required'=>false))
            ->add('save', SubmitType::class, array('label' => 'Save'))
            ->getForm();
		

		if($request->getMethod()=='POST')
		{
		    $form->handleRequest($request);
		    $newUser = $form->getData();
		    $encoder = $this->container->get('security.password_encoder');
			$newUser->setPassword($encoder->encodePassword($user, "laminarin"));

		    $validator = $this->get('validator');
    		$errors = $validator->validate($newUser);

		    if (count($errors) == 0) {
		        $this->container->get('app.bundle.user.management.service')->addUser($newUser);
		        $this->session->getFlashBag()->add('success', 'Add new user is successful.');
		        return $this->redirectToRoute("userIndex");
		    }
		}

        $this->resp["form"] = $form->createView();
        $this->resp["user"] = $user;
        $this->resp["act"] = "add";
        $this->resp['errors'] = $errors;
		return $this->render("administration/user/user_form.html.twig", $this->resp);
		
	}

	public function editAction($id,Request $request)
	{
		$this->authSetup();
		$errors = "";

		$user = $this->container->get('app.bundle.user.management.service')->getUserById($id);
        if (!$user) {
	        $errors[0]['message'] = 'No user found for username with id '.$id;   
	    }
        $form = $this->createFormBuilder($user)
            ->add('username', TextType::class)
            ->add('userGroup', EntityType::class, array(
            		'class' => 'AppBundle:TUserGroup',
				    'choice_label' => 'userGroupName'))
            ->add('email', TextType::class, array('required'=>false))
            ->add('save', SubmitType::class, array('label' => 'Save'))
            ->getForm();
		
		if($request->getMethod()=='POST')
		{
		    $form->handleRequest($request);
		    $modifiedUser = $form->getData();
		    
		    $validator = $this->get('validator');
    		$errors = $validator->validate($modifiedUser);

		    if (count($errors) == 0) {
		        $this->container->get('app.bundle.user.management.service')->editUser($user, $modifiedUser);
		        $this->session->getFlashBag()->add('success', 'Update user is successful. User with id '.$id.' has been updated.');
		        return $this->redirectToRoute("userIndex");
		    }
		    
		} 

		$this->resp["form"] = $form->createView();
        $this->resp["user"] = $user;
        $this->resp["act"] = "edit";
        $this->resp['errors'] = $errors;
		return $this->render("administration/user/user_form.html.twig", $this->resp);
	

	}

	
	public function deleteAction($id)
	{
		$errorMessage = $this->container->get('app.bundle.user.management.service')->deleteUser($id);
		if($errorMessage){
			$this->session->getFlashBag()->add('error', $errorMessage);
		}
		else{
			$this->session->getFlashBag()->add('success', 'Delete user is successful. User with id '.$id.' has been removed.');
		}
		
		return $this->redirectToRoute("userIndex");
	}

	
}
?>