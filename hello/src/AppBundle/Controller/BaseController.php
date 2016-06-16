<?php 
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Service\AuthorizationService;


class BaseController extends Controller
{
	protected $userData = array();
	protected $resp = array();
	protected $authService;
	function __construct()
	{
		
		//echo $request->getPathInfo();
		$this->authService = new AuthorizationService();


	}

	protected function AuthSetup()
	{
		$userGroupID = "ROLE_ANONYMOUS";
		if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) 
		{
			$this->userData['user'] = $this->getUser();
			$userGroupID = $this->userData['user']->getUserGroup()->getUserGroupID(); 
			/*$this->authService->getMenu($this->userData['user']);*/
		}

		$this->userData['menu'] = $this->getMenu($userGroupID, "P");

		$this->resp['userData'] = $this->userData;
		/*$userGroupID = "ROLE_ANONYMOUS";
		if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) 
		{
			$this->userData['user'] = $this->getUser();
			$userGroupID = $this->userData['user']->getUserGroup()->getUserGroupID(); 
		}
		$this->userData['menu'] = $this->authService->getMenu($userGroupID);

		$this->resp['userData'] = $this->userData;*/
	}

	private function getMenu($userGroupID, $menuPID)
	{
		$qb = $this->getDoctrine()->getManager()->createQueryBuilder();
		$qb->select("m");
		$qb->from("AppBundle:TMenu", "m");
		$qb->innerJoin("AppBundle:TPrivilege", "p", "WITH", "m = p.menu");
		$qb->innerJoin("AppBundle:TUserGroup", "grp", "WITH", "p.userGroup = grp");
		
		$qb->where($qb->expr()->eq("m.isActive","1"));
		$qb->andWhere($qb->expr()->eq("grp.userGroupId", ":userGroupID"));
		$qb->andWhere($qb->expr()->eq("m.menuPid", ":menuPID"));

		$qb->setParameters(array(
			"userGroupID"=> $userGroupID,
			"menuPID" => $menuPID));
		
		$dbResult = $qb->getQuery()->getResult();

		$result = array();

		if($dbResult)
		{
			foreach($dbResult as $m)
			{
				array_push($result,array("m" => $m, "subMenu" => $this->getMenu($userGroupID, $m->getMenuId())));
			}	
		}

		return $result;
	}


}

?>