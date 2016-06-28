<?php
namespace AppBundle\Service;
use AppBundle\Repository\UserRepository;
use Doctrine\ORM\EntityManager;
class UserManagementService
{
	private $userRepo;
	private $em;
	function __construct( EntityManager $em)
	{
		//$this->container = $container;
		$this->em = $em;
		$this->userRepo = new UserRepository($this->em);
	}

	public function addUser($user)
	{
		$this->userRepo->addUser($user);
	}

	public function deleteUser($id)
	{
		$this->userRepo->deleteUser($id);
	}

	public function getUserById($id)
	{
		return $this->userRepo->getUserById($id);
	}

	public function editUser($user, $modifiedUser)
	{
		$this->userRepo->editUser($user, $modifiedUser);
	}
}

?>