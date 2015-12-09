<?php

namespace Soccer\TeamBundle\Controller;

use FOS\RestBundle\View\View as vieww;
use FOS\RestBundle\Controller\Annotations\RequestParam;
use FOS\RestBundle\Controller\Annotations\QueryParam;
use FOS\RestBundle\Request\ParamFetcher;
use FOS\RestBundle\Controller\FOSRestController;
use SubwayBuddy\UserBundle\Entity\User;
use Soccer\TeamBundle\Entity\Team;
use FOS\RestBundle\Controller\Annotations\View;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\Controller\Annotations\Get;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;

class TeamController extends FOSRestController
{
   
     /**
     * @Get
     * @return array
     * @View()
     */
    public function getTeamsAction()
    {
        
        $em = $this->getDoctrine()->getManager();
        
        // Va récupérer toutes les lignes de la table 'team'.
        $teams = $em->getRepository('SoccerTeamBundle:Team')->findAll();

        
        return array('teams' => $teams);
        
        
    }

    
    
    /**
     * @param Team $team
     * @return array
     * @View()
     * @ParamConverter("event", class="SoccerTeamBundle:Team")
     */
    public function getTeamAction(Team $team)
    {
        return array('team' => $team);
    }
    
    
    /** @param ParamFetcher $paramFetcher Paramfetcher
     *
     * @RequestParam(array=true, name="ids", default={}, description="List of ids")
     *
     * @return View
     */
    public function postTeamAction(ParamFetcher $Param)
    {
        $team=new Team();
        
        $em = $this->getDoctrine()->getManager();

        $ids=$Param->get('ids');
        $repositoryUser = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SubwayBuddyUserBundle:User')
        ;  
        
       
        
         $team->setNom("team");
        $em->persist($team);
         $em->flush();
        
         foreach($ids as $id)
        {
            $user=$repositoryUser->findOneById($id);
            
            if($user!=null)
                 $team->addJoueur($user);
        }
        
        
        
        $em->persist($team);
         $em->flush();
        $view = Vieww::create();
      
        $userList=$team->getJoueurs();
          
            $view->setData($userList)->setStatusCode(200);
            return $view;
        
    }
    
    
    
    
    
}
