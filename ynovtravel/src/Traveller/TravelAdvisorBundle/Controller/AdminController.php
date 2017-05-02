<?php

namespace Traveller\TravelAdvisorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

class AdminController extends Controller
{
  public function adminAction()
    {
        return $this->render('TravellerTravelAdvisorBundle:Default:admin.html.twig');
    }

    public function adminredirectionAction()
    {
        $url = $this->get('router')->generate('traveller_travel_advisor_travelvisiteur');
    
            return new RedirectResponse($url);
    }
}