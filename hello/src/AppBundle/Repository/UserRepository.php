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
		$this->em->remove($user);
		$this->em->flush();
	}

	public function getUserByUsername($username)
	{
		$qb = $this->menuRepo->createQueryBuilder("u");
		$qb->where($qb->expr()->eq("u.username",":username"));

		$qb->setParameters(array(
			"username"=> $username));
		
		return $qb->getQuery()->getSingleResult();

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
}
?>