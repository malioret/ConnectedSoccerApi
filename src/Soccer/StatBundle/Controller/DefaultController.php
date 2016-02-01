<?php

namespace Soccer\StatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SoccerStatBundle:Default:index.html.twig', array('name' => $name));
    }
}
