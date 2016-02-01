<?php

namespace Soccer\StatBundle\Controller;


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
use Soccer\TeamBundle\Entity\UserMatch;
use Soccer\EvolutionBundle\Entity\Badge;
use FOS\RestBundle\Controller\Annotations\View;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\Controller\Annotations\Get;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class StatController extends FOSRestController
{
    
    
    
     /**
     * @param User $user
     * @return array
     * @View()
     * @ParamConverter("user", class="SoccerUserBundle:User")
     */
    public function getStatAction(User $user)
    {
        
        
          $em = $this->getDoctrine()->getManager();
            $repositoryUser = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SoccerUserBundle:User')
            ;  
        
         $repositoryUserMatch= $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SoccerTeamBundle:UserMatch')
            ;  
     
        //on prend les matchs finis 
        $userMatchs=$repositoryUserMatch->findMatchFinished($user);
            
        $data=array();
        $data["user_match"]=array();
        $nbVictoire=0;
        $nbDefaite=0;
        foreach($userMatchs as $uM)
        {
            
            $match=$uM->getMatch();
            $team1=$match->getTeam1();
            $team2=$match->getTeam2();
            $event=$uM->getEvent();
            
            
            $teamWinner=$match->getWinner();
            
            
             $u=array();
            
            //0 --> lequipe 1
            if($teamWinner==0){
                if($team1->containJoueur($user)){
                    $nbVictoire++;
                     $u["winner"]=true;
                }
                else{
                    $nbDefaite++;
                     $u["winner"]=false;
                }
                
            }
            // 1 --> l'equipe 2
            else{
                if($team2->containJoueur($user)){
                    $nbVictoire++;
                     $u["winner"]=true;
                }
                else{
                    $nbDefaite++;
                     $u["winner"]=false;
                }
                
                
            }
            
            
           
            $u["id"]=$uM->getId();
             $u["idM"]=$match->getId();
            $u["x"]=$team1->getNom()."-VS-".$team2->getNom();
            $u["but"]=$uM->getButs();
            $u["date"]=$event->getDate();
           
            
            $data["user_match"][]=$u;
        
        }
        
        $nbMatchs=count($userMatchs);
        if($nbMatchs>0)
        {
            $butsMoyens=$user->getButs()/count($userMatchs);
        }
        else
        {
          $butsMoyens=0;
        }
        $data["butsMoyens"]=$butsMoyens;
        $data["victoire"]=$nbVictoire;
        $data["defaite"]=$nbDefaite;
        return array('data' => $data);
        
        
    }
    
   
    
    


    
}
