<?php
namespace AppBundle\Service;
use AppBundle\Repository\AuthorizationRepository;
use Doctrine\ORM\EntityManager;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\Persistence\ObjectManager;

class AuthorizationService
{
	private $container;
	private $om;
	private $entityClass;
	private $authRepo;
	function __construct( EntityManager $om, $entityClass)
	{
		//$this->container = $container;
		$this->om = $om;
		$this->entityClass = $entityClass;
		$this->authRepo = new AuthorizationRepository($this->om);
	}

	public function getMenu($userGroupID)
	{
		return $this->authRepo->getAuthorizedMenu($userGroupID, "P");
	}
}

?>