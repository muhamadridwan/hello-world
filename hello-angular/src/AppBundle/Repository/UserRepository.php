<?php
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManager;

class UserRepository 
{
	private $em;
	private $userRepo;
	function __construct(EntityManager $em)
	{
		$this->em = $em;
		$this->userRepo = $this->em->getRepository("AppBundle:TUser");
	}

	public function addUser($user)
	{
		$this->em->persist($user);
		$this->em->flush();
	}

	public function deleteUser($id)
	{
		$user = $this->userRepo->find($id);

		if($user==null)
		{
			return "There is no user with id ".$id.".";
		}
		
		try
		{
			$this->em->remove($user);
			$this->em->flush();
		}
		catch(\Exception $e)
		{
			return $e->getMessage();
		}
		
	}

	public function getUserByUsername($username)
	{
		$qb = $this->userRepo->createQueryBuilder("u");
		$qb->where($qb->expr()->eq("u.username",":username"));

		$qb->setParameters(array(
			"username"=> $username));
		try {
	        return $qb->getQuery()->getSingleResult(); 
	    }
	    catch(\Doctrine\ORM\NoResultException $e) {
	        return null;
	    }
		

	}

	public function getUserById($id)
	{
		return $this->userRepo->find($id);
	}

	public function editUser($user, $modifiedUser)
	{
		$user->setUsername($modifiedUser->getUsername());
		$user->setEmail($modifiedUser->getEmail());
		$this->em->flush();
	}

	public function getAllUser()
	{
		return $this->userRepo->findAll();
	}

	public function getUserByUserGroupId($userGroupId)
	{
		$qb = $this->userRepo->createQueryBuilder("u");
		$qb->innerJoin("AppBundle:TUserGroup", "grp", "WITH", "u.userGroup = grp");
		
		$qb->where($qb->expr()->eq("grp.userGroupId",":userGroupId"));

		$qb->setParameters(array(
			"userGroupId"=> $userGroupId));
		
		return $qb->getQuery()->getResult();
	}
	
	public function getAvailableAdmin()
	{
		$qb = $this->userRepo->createQueryBuilder("u");
		$listOfRegisteredUser = $this->em->createQueryBuilder()
         ->select('IDENTITY(e.user)')
         ->from('AppBundle:Employee', 'e')
                 ->where($qb->expr()->isNotNull("e.user"))
         ->getDQL();
		$qb->innerJoin("AppBundle:TUserGroup", "grp", "WITH", "u.userGroup = grp");
		
		$qb->where($qb->expr()->orX($qb->expr()->eq("grp.userGroupId","'ROLE_ADMIN'"),$qb->expr()->eq("grp.userGroupId","'ROLE_KITCHEN_ADMIN'")));
		$qb->andWhere($qb->expr()->notIn('u',  $listOfRegisteredUser));
		
		return $qb->getQuery()->getResult();
	}
	
}
?>