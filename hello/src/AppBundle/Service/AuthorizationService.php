<?php
namespace AppBundle\Service;
use AppBundle\Repository\AuthorizationRepository;

class AuthorizationService
{
	private $authRepo;
	function __construct()
	{
		$this->authRepo = new AuthorizationRepository();
	}

	public function getMenu($userGroupID)
	{
		return $this->authRepo->findByUserGroupID_Menu($userGroupID, "P");
	}
}

?>