<?php 
namespace AppBundle\Service;

class CustomerService
{
	private CustomerRepository $repo= null;
	fucntion __consruct()
	{
		$this->repo = new CustomerRepository();
	}

	public function getCustomer($limit= 10, $start= 0)
	{
		return $this->repo->getCustomer($limit, $start);
	}

	public function getTotalCustomer()
	{
		return $this->repo->getTotalCustomer();
	}

}
?>