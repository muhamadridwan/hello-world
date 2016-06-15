<?php
namespace AppBundle\Service;
use AppBundle\Repository\AuthorizationRepository;

class AuthorizationService
{
	
	function __construct()
	{
		$this->authRepo = new AuthorizationRepository();
	}

	public function getMenu($user)
	{
		$userGroupID = "ROLE_ANONYMOUS";
		if($user)
		{
			$userGroupID = $user->getUserGroup()->getUserGroupID();
		}

		return $this->authRepo->getMenu($userGroupID);
	}
}

?>