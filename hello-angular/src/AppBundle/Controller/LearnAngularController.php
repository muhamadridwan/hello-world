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
     * @Route("/angularGetEvent/{idx}", name="angularGetEvent")
     */
    public function angularGetEventAction(Request $request, $idx = 0)
    {
        //$this->authSetup();
        $event = '{name : "Angular Boot Camp",
        date : "18/01/2016",
        time : "05:00 am",
        location : {
            address : "Google Headquarters",
            city : "Mountain View",
            province : "CA"
        },
        imageUrl : "http://192.168.56.104:5001/bundles/images/AngularJS.png",
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


        $event2[0] = array(
            "name" => "Angular Boot Camp",
            "date" => "18/01/2016",
            "time" => "05:00 am",
            "location" => array(
                    "address" => "Google Headquarters",
                    "city" => "Mountain View",
                    "province" => "CA"
                ),
            "imageUrl" => "http://172.19.11.104:5001/bundles/images/AngularJS.png",
            "sessions" => [
            array("name" => "Directives Masterclass",
                "creatorName" => "Muhamad Ridwn",
                "duration" => 4,
                "level" => "advanced",
                "abstract" => "In this session you will learn the ins and outs of directives.",
                "upVoteCount" => 0)
            ,
            array(
                "name" => "Scopes for Fun and Profit",
                "creatorName" => "Muhamad Ridwan",
                "duration" => 1,
                "level" => "introductory",
                "abstract" => "Introduction to Scopes.",
                "upVoteCount" => 20
            ),
            array(
                "name" => "Well Behaved Controller",
                "creatorName" => "Muhamad Ridwan",
                "duration" => 1,
                "level" => "introductory",
                "abstract" => "We talk about  Controller.",
                "upVoteCount" => 32
            )
        ]);
        $event2[1] = $event2[0];
        $event2[1]["name"] = "Event Boot 2";

        $response = new Response(json_encode($event2[$idx]));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    /**
     * @Route("/cacheFactory", name="angularCacheFactory")
     */
    function cacheFactoryAction()
    {
        $this->authSetup();
        $this->resp['base_dir'] = realpath($this->getParameter('kernel.root_dir').'/..');
        return $this->render('angular/cache_factory.html.twig',$this->resp );
    }


    /**
     * @Route("/compileService", name="angularCompileService")
     */
    function compileServiceAction()
    {
        $this->authSetup();
        $this->resp['base_dir'] = realpath($this->getParameter('kernel.root_dir').'/..');
        return $this->render('angular/compile_service.html.twig',$this->resp );
    }
    
    /**
     * @Route("/localeService", name="angularLocaleService")
     */
    function localeServiceAction()
    {
        $this->authSetup();
        $this->resp['base_dir'] = realpath($this->getParameter('kernel.root_dir').'/..');
        return $this->render('angular/locale_service.html.twig',$this->resp );
    }

    /**
     * @Route("/timeoutService", name="angularTimeoutService")
     */
    function timeoutServiceAction()
    {
        $this->authSetup();
        $this->resp['base_dir'] = realpath($this->getParameter('kernel.root_dir').'/..');
        return $this->render('angular/timeout_service.html.twig',$this->resp );
    }

    /**
     * @Route("/filterServiceSample", name="angularFilterServiceSample")
     */
    function filterSampleServiceAction()
    {
        $this->authSetup();
        $this->resp['base_dir'] = realpath($this->getParameter('kernel.root_dir').'/..');
        return $this->render('angular/FilterSample.html.twig',$this->resp );
    }

    /**
    * @Route("/cookieServiceSample", name="angularCookieServiceSample")
    */
    function cookieSampleService()
    {
        $this->authSetup();
        $this->resp['base_dir'] = realpath($this->getParameter('kernel.root_dir').'/..');
        return $this->render('angular/Cookies.html.twig',$this->resp );
    }

    /**
    * @Route("/newEventWithNGRoute", name="newEventWithNGRoute")
    */
    function newEventWithNGRouteAction()
    {
        $this->authSetup();
        $this->resp['base_dir'] = realpath($this->getParameter('kernel.root_dir').'/..');
        return $this->render('angular/templates/new_event.html.twig');
    }
    

}
