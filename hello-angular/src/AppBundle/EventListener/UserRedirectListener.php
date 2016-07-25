<?php
namespace AppBundle\EventListener;

use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\HttpKernel;
use Symfony\Component\DependencyInjection\ContainerAware;

class UserRedirectListener extends ContainerAware
{
	public function onKernelRequest(GetResponseEvent $event)
	{
		//if(HttpKernel::MASTER_REQUEST != $event->getRequestType())
		//{
			//don't do anything if it's not the master request.
		//	return;
		//}


	}

}
?>