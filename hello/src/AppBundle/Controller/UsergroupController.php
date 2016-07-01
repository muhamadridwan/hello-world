<?php 
namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Entity\TUserGroup;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class UsergroupController extends BaseController
{

	function __construct()
	{
		parent::__construct();

	}

	public function indexAction()
	{
		$this->authSetup();
		$usergroups = $this->container->get('app.bundle.usergroup.management.service')->getAllUsergroup();
        
		$this->resp["usergroups"] = $usergroups;
		return $this->render("administration/usergroup/index.html.twig", $this->resp);
	}

	public function addAction(Request $request)
	{
		$this->authSetup();
		$usergroup = new TUserGroup();
        	
        $form = $this->createFormBuilder($usergroup)
            ->add('userGroupId', TextType::class)
            ->add('userGroupName', TextType::class)
            ->add('userGroupDesc', TextType::class)
            ->add('isActive', ChoiceType::class, array(
			    'choices'  => array(
			        'Active' => 1,
			        'Non-Active' => 0
			    )
			))
			/*->add('isActive', CheckboxType::class, array(
			    'label'    => 'is active?',
			    'required' => false
			))*/
            ->add('save', SubmitType::class, array('label' => 'Save'))
            ->getForm();
		$error = "";

		if($request->getMethod()=='POST')
		{
		    $form->handleRequest($request);
		    $newUsergroup = $form->getData();
		    
		    $validator = $this->get('validator');
    		$errors = $validator->validate($newUsergroup);

		    if (count($errors) > 0) {
		        $error = (string) $errors;
		    }
		    else
		    {
		        $this->container->get('app.bundle.usergroup.management.service')->addUsergroup($newUsergroup);
		        return $this->redirectToRoute("usergroupIndex");
		    } 
		}

        $this->resp["form"] = $form->createView();
        $this->resp["act"] = "add";
        $this->resp['error'] = $error;
		return $this->render("administration/usergroup/usergroup_form.html.twig", $this->resp);
		
	}

	public function editAction($id,Request $request)
	{


		$this->authSetup();
		$error = "";

		$usergroup = $this->container->get('app.bundle.usergroup.management.service')->getUsergroupById($id);
        if (!$usergroup) {
	        $error = 'No usergroup found for id '.$id;   
	    }
        $form = $this->createFormBuilder($usergroup)
            ->add('userGroupId', TextType::class)
            ->add('userGroupName', TextType::class)
            ->add('userGroupDesc', TextType::class)
            ->add('isActive', ChoiceType::class, array(
			    'choices'  => array(
			        'Active' => 1,
			        'Non-Active' => 0
			    )
			))
            ->add('save', SubmitType::class, array('label' => 'Save'))
            ->getForm();
		
		if($request->getMethod()=='POST')
		{
		    $form->handleRequest($request);
		    $modifiedUsergroup = $form->getData();
		    
		    $validator = $this->get('validator');
    		$errors = $validator->validate($modifiedUsergroup);

		    if (count($errors) > 0) {
		        $error = (string) $errors;
		    }
		    else
		    {
		        $this->container->get('app.bundle.usergroup.management.service')->editUsergroup($usergroup, $modifiedUsergroup);
		        return $this->redirectToRoute("usergroupIndex");
		    }
		    
		} 
		else
		{
			
			$this->resp["form"] = $form->createView();
			$this->resp["usergroup"] = $usergroup;
	        $this->resp["act"] = "edit";
	        $this->resp['error'] = $error;
			return $this->render("administration/usergroup/usergroup_form.html.twig", $this->resp);
		}

	}

	
	public function deleteAction($id)
	{
		$this->container->get('app.bundle.usergroup.management.service')->deleteUsergroup($id);
		return $this->redirectToRoute("usergroupIndex");
	}

	
}
?>