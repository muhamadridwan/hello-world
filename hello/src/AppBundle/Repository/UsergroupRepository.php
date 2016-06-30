<?php
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManager;

class UsergroupRepository 
{
	private $em;
	private $usergroupRepo;
	function __construct(EntityManager $em)
	{
		$this->em = $em;
		$this->usergroupRepo = $this->em->getRepository("AppBundle:TUsergroup");
	}

	public function addUsergroup($usergroup)
	{
		$this->em->persist($usergroup);
		$this->em->flush();
	}

	public function deleteUsergroup($id)
	{
		$usergroup = $this->usergroupRepo->find($id);
		$this->em->remove($usergroup);
		$this->em->flush();
	}

	public function getUsergroupById($id)
	{
		return $this->usergroupRepo->find($id);
	}

	public function editUsergroup($usergroup, $modifiedUsergroup)
	{
		$usergroup->setUserGroupName($modifiedUsergroup->getUserGroupName());
		$usergroup->setUserGroupDesc($modifiedUsergroup->getUserGroupDesc());
		$usergroup->setIsActive($modifiedUsergroup->getIsActive());
		$this->em->flush();
	}

	public function getAllUsergroup()
	{
		return $this->usergroupRepo->findAll();
	}

}
?>