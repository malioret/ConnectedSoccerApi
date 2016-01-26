<?php

namespace Soccer\EvolutionBundle\Controller;


use FOS\RestBundle\Controller\Annotations\RequestParam;
use FOS\RestBundle\View\View as Vieww;
use FOS\RestBundle\Request\ParamFetcher;
use FOS\RestBundle\Controller\FOSRestController;
use Soccer\EventBundle\Entity\Event;
use Soccer\UserBundle\Entity\User;
use Soccer\EventBundle\Entity\Terrain;
use Soccer\EventBundle\Entity\TypeEvent;
use Soccer\EventBundle\Entity\UserEvent;
use Soccer\TeamBundle\Entity\Team;
use Soccer\EvolutionBundle\Entity\Badge;
use FOS\RestBundle\Controller\Annotations\View;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\Controller\Annotations\Get;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class BadgeController extends FOSRestController
{
    /**
     * @Get
     * @return array
     * @View()
     */
    public function getBadgesAction()
    {
        
        $em = $this->getDoctrine()->getManager();
        
        // Va récupérer toutes les lignes de la table 'event'.
        $badges = $em->getRepository('SoccerEvolutionBundle:Badge')->findAll();

        
        return array('badges' => $badges);
        
        
    }

    
    
    /**
     * @param Badge $badge
     * @return array
     * @View()
     * @ParamConverter("badge", class="SoccerEvolutionBundle:Badge")
     */
    public function getBadgeAction(Badge $badge)
    {
        return array('badge' => $badge);
    }
    
    
     /**
     * @param User $user
     * @return array
     * @View()
     * @ParamConverter("user", class="SoccerUserBundle:User")
     */
    public function getBadge_userAction(User $user)
    {
        
        
        $em = $this->getDoctrine()->getManager();
        
        // Va récupérer toutes les lignes de la table 'event'.
        $badges = $em->getRepository('SoccerEvolutionBundle:Badge')->findByUser($user);
        
        return array('badges' => $badges);
    }
    
    
   
    
    


    
}
