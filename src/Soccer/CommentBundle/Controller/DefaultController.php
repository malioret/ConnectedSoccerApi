<?php

namespace Soccer\CommentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SoccerCommentBundle:Default:index.html.twig', array('name' => $name));
    }
}
