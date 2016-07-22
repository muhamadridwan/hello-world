<?php
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Query\ResultSetMapping;


class AuthorizationRepository 
{
	protected $em;
	function __construct(EntityManager $em)
	{
		$this->em = $em;
	}
}

?>