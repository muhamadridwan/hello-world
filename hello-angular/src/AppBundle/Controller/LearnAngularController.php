<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\TUser;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class LearnAngularController extends BaseController
{
	function __construct()
	{
		parent::__construct();
	}

    /**
     * @Route("/angularEditProfile", name="angularEditProfile")
     */
    public function angularEditProfileAction(Request $request)
    {
        $this->authSetup();
        $this->resp['base_dir'] = realpath($this->getParameter('kernel.root_dir').'/..');
        return $this->render('angular/edit_profile.html.twig',$this->resp );
    }

    /**
     * @Route("/angularGetEvent", name="angularGetEvent")
     */
    public function angularGetEventAction(Request $request)
    {
        $this->authSetup();
        $event = '{name : "Angular Boot Camp",
        date : "18/01/2016",
        time : "05:00 am",
        location : {
            address : "Google Headquarters",
            city : "Mountain View",
            province : "CA"
        },
        imageUrl : "http://192.168.56.102:5001/bundles/images/AngularJS.png",
        sessions : [
            {
                name : "Directives Masterclass",
                creatorName : "Muhamad Ridwn",
                duration : 4,
                level : "advanced",
                abstract : "In this session you will learn the ins and outs of directives.",
                upVoteCount : 0
            },
            {
                name : "Scopes for Fun and Profit",
                creatorName : "Muhamad Ridwan",
                duration : 1,
                level : "introductory",
                abstract : "Introduction to Scopes.",
                upVoteCount : 20
            },
            {
                name : "Well Behaved Controller",
                creatorName : "Muhamad Ridwan",
                duration : 1,
                level : "introductory",
                abstract : "We talk about  Controller.",
                upVoteCount : 32
            }
        ]}}';
        $response = new Response(json_encode($event));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    


}
