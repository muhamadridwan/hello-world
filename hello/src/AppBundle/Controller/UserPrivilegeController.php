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
	{
		parent::__construct();
	}

	public function indexAction($user_group_id, Request $request)
	{
		$this->authSetup();
		
		$usergroups = $this->container->get('app.bundle.usergroup.management.service')->getAllUsergroup();
        $defaultUserGroup = $this->container->get('app.bundle.usergroup.management.service')->getUsergroupByIdOrDefault($user_group_id);
		$form = $this->createFormBuilder()
            ->add('usergroup', EntityType::class, array(
				    'class' => 'AppBundle:TUserGroup',
				    'attr' => array(
            			'onchange'=> 'getUserPrivilegeMenu()'
            			),
				    'choices' => $usergroups,
				    'data' => $defaultUserGroup,
				    'choice_label' => 'userGroupName'))
            ->add('save', SubmitType::class, array('label' => 'Load'))
            ->getForm();
		
		$userGroupId = $defaultUserGroup->getUserGroupId();
		if($request->getMethod()=='POST')
		{
			$form->handleRequest($request);
			$data = $form->getData();

			$userGroupId = $data["usergroup"]->getUserGroupId();
		}
		    
	    $this->resp["userPrivilegeMenu"] = $this->container
	    		->get('app.bundle.authorization.service')->getMenuPrivilageByUserGroupId(
	    			$userGroupId);
		$privCollection = array("privileges" => $this->resp["userPrivilegeMenu"]);		
		$privilegeForm = $this->createFormBuilder($privCollection)
			->add( 'privileges', CollectionType::class, array('entry_type'=> UserPrivilegeType::class))
			->add('savePrivilege', SubmitType::class, array('label' => 'Save'))
			->getForm();
	
		$this->resp["userGroupId"] = $userGroupId;
		$this->resp["privilegeForm"] = $privilegeForm->createView();
		

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
			$this->session->getFlashBag()->add('success', 'Update user group privilege for user group '.$userGroupId.' is successful.');
		        
		}
		
		return $this->redirectToRoute('userPrivilegeIndex', array('user_group_id'=>$userGroupId));
	}
	
}
?>