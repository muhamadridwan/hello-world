<?php 
namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use AppBundle\Form\Type\UserPrivilegeType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class UserPrivilegeController extends BaseController
{

	function __construct()
	{}

	public function indexAction(Request $request)
	{
		$this->authSetup();
		$usergroups = $this->container->get('app.bundle.usergroup.management.service')->getAllUsergroup();

        $form = $this->createFormBuilder()
            ->add('usergroup', EntityType::class, array(
				    'class' => 'AppBundle:TUserGroup',
				    'attr' => array(
            			'onchange'=> 'getUserPrivilegeMenu()'
            			),
				    'choices' => $usergroups,
				    'choice_label' => 'userGroupName'))
            ->add('save', SubmitType::class, array('label' => 'Load'))
            ->getForm();
		
		
        if($request->getMethod()=='POST')
		{
		    $form->handleRequest($request);
		    $data = $form->getData();
		    
		    $this->resp["userPrivilegeMenu"] = $this->container
		    		->get('app.bundle.authorization.service')->getMenuPrivilageByUserGroupId(
		    			$data["usergroup"]->getUserGroupId());
			$privCollection = array("privileges" => $this->resp["userPrivilegeMenu"]);		
			$privilegeForm = $this->createFormBuilder($privCollection)
				->add( 'privileges', CollectionType::class, array('entry_type'=> UserPrivilegeType::class))
				->add('savePrivilege', SubmitType::class, array('label' => 'Save'))
				->getForm();

			
			// var_dump( $data );
		
			$this->resp["userGroupId"] = $data["usergroup"]->getUserGroupId();
			$this->resp["privilegeForm"] = $privilegeForm->createView();

		}

        $this->resp["form"] = $form->createView();
		
		return $this->render("administration/privilege/index.html.twig", $this->resp);
	}

	public function saveUserPrivilegeAction($userGroupId, Request $request)
	{
		$this->authSetup();
		if($request->getMethod()=='POST')
		{
			$this->resp["userPrivilegeMenu"] = $this->container
		    		->get('app.bundle.authorization.service')->getMenuPrivilageByUserGroupId(
		    			$userGroupId);
			$privCollection = array("privileges" => $this->resp["userPrivilegeMenu"]);		
			$privilegeForm = $this->createFormBuilder($privCollection)
							->add( 'privileges', CollectionType::class, array('entry_type'=> UserPrivilegeType::class))
							->add('savePrivilege', SubmitType::class, array('label' => 'Save'))
							->getForm();

			$privilegeForm->handleRequest($request);
			$data = $privilegeForm->getData();
			$this->container
			    		->get('app.bundle.authorization.service')->savePrivileges($data, $userGroupId);

		}
		
		return $this->redirectToRoute("userPrivilegeIndex");
        
		
	}
	
}
?>