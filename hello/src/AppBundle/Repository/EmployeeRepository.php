<?php
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManager;

class EmployeeRepository 
{
	private $em;
	private $employeeRepo;
	function __construct(EntityManager $em)
	{
		$this->em = $em;
		$this->employeeRepo = $this->em->getRepository("AppBundle:Employee");
	}

	public function addEmployee($employee)
	{
		$this->em->persist($employee);
		$this->em->flush();
	}

	public function deleteEmployee($employee_id)
	{
		$employee = $this->getEmployeeById($employee_id);

		if($employee==null)
		{
			return "There is no employee with id ".$employee_id.".";
		}
		
		try
		{
			$this->em->remove($employee);
			$this->em->flush();
		}
		catch(\Exception $e)
		{
			return $e->getMessage();
		}
	}

	public function getEmployeeById($employee_id)
	{
		$qb = $this->employeeRepo->createQueryBuilder("e");
		$qb->where($qb->expr()->eq("e.employeeId",":employeeId"));

		$qb->setParameters(array(
			"employeeId"=> $employee_id));
		
		return $qb->getQuery()->getSingleResult();

	}

	public function setUser($employee_id, $user)
	{
		$employee = $this->getEmployeeById($employee_id);
		if($employee == null)
		{
			return "There is no employee with id ".$employee_id;
		}

		$employee->setUser($user);
		$this->em->flush();
	}

	public function editEmployee($employee, $modifiedEmployee)
	{
		//$employee->setUser($modifiedEmployee->getUser());
		$employee->setPersonalId($modifiedEmployee->getPersonalId());
		$employee->setEmployeeName($modifiedEmployee->getEmployeeName());
		$employee->setEmployeeFullname($modifiedEmployee->getEmployeeFullname());
		$employee->setEmployeeAddress($modifiedEmployee->getEmployeeAddress());
		$employee->setPhoneNumber($modifiedEmployee->getPhoneNumber());
		$employee->setEmail($modifiedEmployee->getEmail());
		$employee->setPicture($modifiedEmployee->getPicture());
		$employee->setJoinDate($modifiedEmployee->getJoinDate());
		$employee->setResignDate($modifiedEmployee->getResignDate());
		$employee->setIsActive($modifiedEmployee->getIsActive());
		
		$this->em->flush();
	}

	public function getAllEmployee()
	{
		return $this->employeeRepo->findAll();
	}

	public function getEmployeeWhichIsAdmin()
	{
		$qb = $this->employeeRepo->createQueryBuilder("e");
		$qb->where($qb->expr()->isNotNull("e.user"));

		return $qb->getQuery()->getResult();
	}

	public function getEmployeeWhichIsNotAdmin()
	{
		$qb = $this->employeeRepo->createQueryBuilder("e");
		$qb->where($qb->expr()->isNull("e.user"));

		return $qb->getQuery()->getResult();
	}

	public function getEmployeeByUser($user)
	{
		try
		{
			$qb = $this->employeeRepo->createQueryBuilder("e");
			$qb->where($qb->expr()->eq("e.user",":user"));

			$qb->setParameters(array(
				"user"=> $user));
			
			return $qb->getQuery()->getSingleResult();
		}
		catch(\Exception $e){
		    return null;
		}
	}
}
?>