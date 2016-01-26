<?php

namespace Soccer\EvolutionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SoccerEvolutionBundle:Default:index.html.twig', array('name' => $name));
    }
}
