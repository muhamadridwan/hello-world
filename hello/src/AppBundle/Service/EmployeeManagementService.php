<?php
namespace AppBundle\Service;
use AppBundle\Repository\EmployeeRepository;
use Doctrine\ORM\EntityManager;
class EmployeeManagementService
{
	private $employeeRepo;
	private $em;
	function __construct( EntityManager $em)
	{
		//$this->container = $container;
		$this->em = $em;
		$this->employeeRepo = new EmployeeRepository($this->em);
	}

	public function addEmployee($employee)
	{
		$this->employeeRepo->addEmployee($employee);
	}

	public function deleteEmployee($employee_id)
	{
		$this->employeeRepo->deleteEmployee($employee_id);
	}

	public function getEmployeeById($employee_id)
	{
		return $this->employeeRepo->getEmployeeById($employee_id);
	}

	public function editEmployee($employee, $modifiedEmployee)
	{
		$this->employeeRepo->editEmployee($employee, $modifiedEmployee);
	}

	public function getAllEmployee()
	{
		return $this->employeeRepo->getAllEmployee();
	}

	public function setUser($employee_id, $user)
	{
		return $this->employeeRepo->setUser($employee_id, $user);	
	}

	public function getEmployeeWhichIsAdmin()
	{
		return $this->employeeRepo->getEmployeeWhichIsAdmin();
	}

	public function getEmployeeWhichIsNotAdmin()
	{
		return $this->employeeRepo->getEmployeeWhichIsNotAdmin();
	}

	public function getEmployeeByUser($user)
	{
		return $this->employeeRepo->getEmployeeByUser($user);
	}
}

?>