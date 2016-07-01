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
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use AppBundle\Entity\TPrivilege;

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
		}

        $this->resp["form"] = $form->createView();
		return $this->render("administration/privilege/index.html.twig", $this->resp);
	}

	public function saveUserPrivilegeAction(Request $request)
	{
		$this->authSetup();
		$privilege = new TPrivilege();
		$form = $this->createFormBuilder($privilege)
            
			->add('pAccess', CheckboxType::class, array(
			    'required' => false
			))
			->add('pCreate', CheckboxType::class, array(
			    'required' => false
			))
			->add('pRetrieve', CheckboxType::class, array(
			    'required' => false
			))
			->add('pUpdate', CheckboxType::class, array(
			    'required' => false
			))
			->add('pDelete', CheckboxType::class, array(
			    'required' => false
			))
            ->add('save', SubmitType::class, array('label' => 'Save'))
            ->getForm();

         $this->resp["form"] = $form->createView();
		return $this->render("administration/privilege/privilege_form.html.twig", $this->resp);
		//return $this->redirectToRoute("userPrivilegeIndex");
		
	}

	

	
}
?>