<?php
namespace AppBundle\Service;
use AppBundle\Repository\AuthorizationRepository;
use Doctrine\ORM\EntityManager;

class AuthorizationService
{
	private $em;
	private $authRepo;
	function __construct( EntityManager $em)
	{
		$this->em = $em;
		$this->authRepo = new AuthorizationRepository($this->em);
	}

	public function getMenu($userGroupID)
	{
		return $this->authRepo->getAuthorizedMenu($userGroupID, "P");
	}
}

?>