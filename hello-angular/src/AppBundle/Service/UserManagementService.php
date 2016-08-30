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
		return $this->userRepo->deleteUser($id);
	}

	public function getUserById($id)
	{
		return $this->userRepo->getUserById($id);
	}

	public function editUser($user, $modifiedUser)
	{
		$this->userRepo->editUser($user, $modifiedUser);
	}

	public function getUserByUsername($username)
	{
		return $this->userRepo->getUserByUsername($username);
	}

	public function getAllUser()
	{
		return $this->userRepo->getAllUser();
	}

	public function getAllCustomerUser()
	{
		return $this->userRepo->getUserByUserGroupId("ROLE_CUSTOMER");
	}

	public function getAllAdminUser()
	{
		return $this->userRepo->getUserByUserGroupId("ROLE_ADMIN");
	}
	
	public function getAvailableAdmin()
	{
		return $this->userRepo->getAvailableAdmin();
	}
}

?>