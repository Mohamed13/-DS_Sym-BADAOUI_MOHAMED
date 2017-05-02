<?php

namespace Traveller\TravelAdvisorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TravellerTravelAdvisorBundle:Default:index.html.twig');
    }

    public function travelAction()
    {
    		return new Response("Bienvenue sur TravelAdvisor !");
    }

    public function travelnameAction($name) 
    {
    	
    	if($name === "votrePrenom") {
    		$url = $this->get('router')->generate('traveller_travel_advisor_travel');
    
   			return new RedirectResponse($url);
    } 

    return new Response("Bienvenue sur TravelAdvisor ".$name.".");

}

}
