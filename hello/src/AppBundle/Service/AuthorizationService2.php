<?php
namespace AppBundle\Service;
use AppBundle\Repository\AuthorizationRepository;
use Doctrine\ORM\EntityManager;

class AuthorizationService2
{
	private $container;
	private $om;
	private $entityClass;
	private $authRepo;
	function __construct( ContainerInterface $container, ObjectManager $om, $entityClass)
	{
		$this->container = $container;
		$this->om = $om;
		$this->entityClass = $entityClass;
		$this->authRepo = $this->om->getRepository($this->entityClass);
	}

	public function getMenu($userGroupID)
	{
		return $this->authRepo->findByUserGroupID_Menu($userGroupID, "P");
	}
}

?>