<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\TUser;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends BaseController
{
	function __construct()
	{
		parent::__construct();
	}

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $this->authSetup();
		//print_r($this->userData['menu']);
        $user = new TUser();
		
		$encoder = $this->container->get('security.password_encoder');
		$encoded = $encoder->encodePassword($user, "laminarin");
		//print_r($encoded);
		//return new Response($encoded);
        $this->resp['base_dir'] = realpath($this->getParameter('kernel.root_dir').'/..');
        return $this->render('default/index.html.twig',$this->resp );
    }


}
