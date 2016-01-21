<?php

namespace Soccer\UtilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SoccerUtilBundle:Default:index.html.twig', array('name' => $name));
    }
}
