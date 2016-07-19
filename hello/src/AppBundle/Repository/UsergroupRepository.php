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
		if($usergroup==null)
		{
			return "There is no user group with id ".$id.".";
		}

		$this->em->remove($usergroup);
		$this->em->flush();
	}

	public function getUsergroupById($id)
	{
		try{
			$qb = $this->usergroupRepo->createQueryBuilder("u");
			$qb->where($qb->expr()->eq("u.userGroupId",":userGroupId"));

			$qb->setParameters(array(
				"userGroupId"=> $id));
			
			return $qb->getQuery()->getSingleResult();
		}
		catch(\Exception $e)
		{
			return null;
		}
	}

	public function getUsergroupByIdOrDefault($id)
	{
		$usergroup = $this->getUsergroupById($id);
		if($usergroup == null)
		{
			$usergroup = $this->getDefaultUsergroup();
		}

		return $usergroup;
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

	public function getDefaultUsergroup()
	{
		$qb = $this->usergroupRepo->createQueryBuilder("u")->setMaxResults(1);
		$result = $qb->getQuery()->getResult();
		return $result;
	}

}
?>