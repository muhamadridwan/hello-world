<?php
namespace AppBundle\Service;
use AppBundle\Repository\UsergroupRepository;
use Doctrine\ORM\EntityManager;
class UsergroupManagementService
{
	private $usergroupRepo;
	private $em;
	function __construct( EntityManager $em)
	{
		//$this->container = $container;
		$this->em = $em;
		$this->usergroupRepo = new UsergroupRepository($this->em);
	}

	public function addUsergroup($usergroup)
	{
		$this->usergroupRepo->addUsergroup($usergroup);
	}

	public function deleteUsergroup($id)
	{
		$this->usergroupRepo->deleteUsergroup($id);
	}

	public function getUsergroupById($id)
	{
		return $this->usergroupRepo->getUsergroupById($id);
	}

	public function editUsergroup($usergroup, $modifiedUsergroup)
	{
		$this->usergroupRepo->editUsergroup($usergroup, $modifiedUsergroup);
	}

	public function getAllUsergroup()
	{
		return $this->usergroupRepo->getAllUsergroup();
	}

}

?>