<?php

namespace Soccer\TeamBundle\Controller;

use FOS\RestBundle\View\View as vieww;
use FOS\RestBundle\Controller\Annotations\RequestParam;
use FOS\RestBundle\Controller\Annotations\QueryParam;
use FOS\RestBundle\Request\ParamFetcher;
use FOS\RestBundle\Controller\FOSRestController;
use SubwayBuddy\UserBundle\Entity\User;
use Soccer\TeamBundle\Entity\Team;
use Soccer\TeamBundle\Entity\Match;
use Soccer\TeamBundle\Entity\UserMatch;
use Soccer\EventBundle\Entity\Event;
use Soccer\EventBundle\Entity\UserEvent;
use FOS\RestBundle\Controller\Annotations\View;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\Controller\Annotations\Get;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;

class MatchController extends FOSRestController
{
   
     /**
     * @Get
     * @return array
     * @View()
     */
    public function getMatchsAction()
    {
        
        $em = $this->getDoctrine()->getManager();
        
        // Va récupérer toutes les lignes de la table 'team'.
        $matchs = $em->getRepository('SoccerTeamBundle:Match')->findAll();

        
        return array('matchs' => $matchs);
        
        
    }

    
    
    /**
     * @param Match $match
     * @return array
     * @View()
     * @ParamConverter("match", class="SoccerTeamBundle:Match")
     */
    public function getMatchAction(Match $match)
    {
        return array('match' => $match);
    }
    
    
    
     /** @param ParamFetcher $paramFetcher Paramfetcher
     *
     * @RequestParam( name="id", nullable=false, description="id event")
     *
     * @return View
     */
    public function postMatchAction(ParamFetcher $Param)
    {
        
        $em = $this->getDoctrine()->getManager();

        $id=$Param->get('id');
        $repositoryMatch = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SoccerTeamBundle:Match')
        ;  
        
        $repositoryEvent = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SoccerEventBundle:Event')
        ;  
        
        $event=$repositoryEvent->findOneById($id);
        $matchs=$repositoryMatch->findByEvent($event);
        
       
        $view = Vieww::create();
      
        
          
            $view->setData($matchs)->setStatusCode(200);
            return $view;
        
    }
   
    
    
}
