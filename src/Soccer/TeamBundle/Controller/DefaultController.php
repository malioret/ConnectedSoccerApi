<?php

namespace Soccer\TeamBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SoccerTeamBundle:Default:index.html.twig', array('name' => $name));
    }
}
