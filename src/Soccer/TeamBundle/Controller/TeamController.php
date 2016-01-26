<?php

namespace Soccer\TeamBundle\Controller;

use FOS\RestBundle\View\View as vieww;
use FOS\RestBundle\Controller\Annotations\RequestParam;
use FOS\RestBundle\Controller\Annotations\QueryParam;
use FOS\RestBundle\Request\ParamFetcher;
use FOS\RestBundle\Controller\FOSRestController;
use Soccer\UserBundle\Entity\User;
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
     * @ParamConverter("team", class="SoccerTeamBundle:Team")
     */
    public function getTeamAction(Team $team)
    {
        return array('team' => $team);
    }
    
    
     /** @param ParamFetcher $paramFetcher Paramfetcher
     *
     * @RequestParam( name="id", nullable=false, description="id event")
     *
     * @return View
     */
    public function postTeamEventAction(ParamFetcher $paramFetcher)
    {
         $em = $this->getDoctrine()->getManager();

        $id=$paramFetcher->get('id');
        $repositoryTeam = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SoccerTeamBundle:Team')
        ;  
        
        $repositoryEvent = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SoccerEventBundle:Event')
        ;  
        
        $event=$repositoryEvent->findOneById($id);
         $teams=$repositoryTeam->findTeamsByEvent($event->getId());
        
       
        $view = Vieww::create();
      
        
          
            $view->setData($teams)->setStatusCode(200);
            return $view;
    
    }
    
    //creer une team
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
            ->getRepository('SoccerUserBundle:User')
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
    
     /** 
     * @param ParamFetcher $Param Paramfetcher
     *
     * @RequestParam(name="id", description="event en param")
     * @RequestParam(name="regenerate", nullable=true, description="option")
     *
     * @return View
     */
    public function postGenerateTeamAction(ParamFetcher $Param)
    {
       
        
        $em = $this->getDoctrine()->getManager();
         $view = Vieww::create();

        //on recupère l'id de l"event
        
        $id=$Param->get('id');
        
        //declaration des repository qui permettent de récupérer les données dans la base
        $repositoryEvent = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SoccerEventBundle:Event')
        ;  
        
         $repositoryUserEvent = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SoccerEventBundle:UserEvent')
        ;  
        
         $repositoryTeam= $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SoccerTeamBundle:Team')
        ;  
        
        $repositoryUserMatch= $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SoccerTeamBundle:UserMatch')
        ;  
        
        
        $repositoryMatch= $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SoccerTeamBundle:Match')
        ;  
        
        //on récupère l'event associé à l'id donnée en paramètre
        $event=$repositoryEvent->findOneById($id);
       
      
      
      //option de régénération : 
      $regenerated=$Param->get("regenerate");
      if($regenerated==1)
      {
          //on recuperer les userMatch de cet event
          $umatchs=$repositoryUserMatch->findByEvent($event);
          foreach($umatchs as $umatch)
          {
              $em->remove($umatch); // on supprime les userMatch (stats de ces match)
              $em->flush();
          }
          $matchs=$repositoryMatch->findByEvent($event);
          foreach($matchs as $match)
          {
              $em->remove($match); // on supprime les Match 
              $em->flush();
          }
          
          
          $teams=$repositoryTeam->findTeamsByEvent($event->getId());
          foreach($teams as $team)
          {
              $em->remove($team); // on supprime les équipes
              $em->flush();
          }
          $event->setIsGenerated(0); //on remet à 0 le champ isGenerated
          $em->persist($event);
          $em->flush();
      }
      
      
      
      
      
       $teams=array();// les équipes générés.
       //les équipes ont déjà été générés
       if($event->getIsGenerated()==1)
       {
           $teams=$repositoryTeam->findTeamsByEvent($event->getId());
       }
       else // on génère les équipes
       {
       //le nombre de joueurs max par équipe 
       $nombreJoueurMax=$event->getNombreJoueurs();
        
        //la liste des joueurs qui participent 
        /*
        * Chaque instance est une entité UserEvent qui contient Le User, l'event et le status  (la jointure)
        */
        //$joueurs=$repositoryUserEvent->findByUserParticipe($event);
        //$joueurs=$repositoryUserEvent->findByUserParticipeAndAttente($event);
        
        
        //MODIFICATION
        $joueurs=$repositoryUserEvent->findByUserParticipeAndAttenteNiveau($event); // on récupère la liste des joueurs triés par niveau décroissant
        //$joueurs=$repositoryUserEvent->findByUserParticipeAndNiveau($event);
        if($joueurs==null)// si il n'existe pas de joueurs
        {
             $view->setData("false")->setStatusCode(400);
               return $view;
        }
        
        //on compte le nombre de joueurs qui participent
        $nombreJoueur=count($joueurs);
        
        // on compte le nombre d'équipe possibles
        $nombreEquipe=$nombreJoueur/$nombreJoueurMax;
        
        // si le nombre de joueurs ne respecte pas au moins le maximum du nombre de joueurs d'une équipe (exemple si on a 2 joueurs et le max est de 5)
        // il est inutile de faire une "équipe de 1 vs 1"
        if($nombreEquipe<1)
        {
            // $view->setData("pas assez de joueurs :  joueurs requis : ".$nombreJoueurMax." joueurs totale : ".$nombreJoueur)->setStatusCode(400);
              $view->setData("false")->setStatusCode(400);
               return $view;
        }
        else
        {
            //on prend la valeur supérieur (exemple si 12/5 = 2.4, on obtient 3 et donc 3 équipes)
            $nombreEquipe=ceil($nombreEquipe);
        }
        
        //on estime le nombre de joueurs Réels par équipe
        $nombreJoueurRéel=intval($nombreJoueur/$nombreEquipe);
        $nombreJoueurRestantsAAffecter = ($nombreJoueur%$nombreEquipe);
        
      /*
        $em->persist($team);
         $em->flush();
      */
       
       //V1 : Repartir au hasard les joueurs peut importe leur niveau.
       //V2 : tenir compte de l'attribut niveau => pb de sac à dos.
       //V3 : Inclure les postes, pour ne pas avoir une équipe que d'attaquants => Compliqué, voir avec Claire Hanen ou François Delbot.
       
       
       //Debut V1
       //arrayJoueurs devra être un tableau à 2d : 1ère d numéroEquipe, 2eme d id joueur
       /*
       $arrayJoueurs=array();
       //cpt : c le cptème joueur du tableau $joueurs, on doit tous leur
       $cpt = 0;
       for($i=0;$i<$nombreEquipe;$i++)
       {
           for($j=0;$j<$nombreJoueurRéel;$j++)
           {
               $arrayJoueurs[$i][$j] = $joueurs[$cpt]->getUser();
               $cpt++;
           }
       }
       
       //On Affecte les joueurs restants aux première equipes libres
       $cpt=$nombreJoueurRéel;
       $tmp = $nombreJoueurRéel;
       for($i=0;$i<$nombreEquipe;$i++)
       {
           if($cpt!= ($nombreJoueurRéel+$nombreJoueurRestantsAAffecter+1) )
           {
              
              $arrayJoueurs[$i][$nombreJoueurRéel] = $joueurs[$cpt]->getUser();
              $cpt++;
           }
           else
           {
               $i=$nombreEquipe;
           }
       }
       
       
       
       */
        //$view->setData($nombreJoueurRéel)->setStatusCode(400);
          //     return $view;
       //V2 Tenir compte du sac à dos :
       //Debut V1
       //arrayJoueurs devra être un tableau à 2d : 1ère d numéroEquipe, 2eme d id joueur
       $arrayJoueurs=array();
       //cpt : c le cptème joueur du tableau $joueurs, on doit tous leur
       $cpt = 0;
       $kj=$nombreEquipe-1;
       $f=0; // numero de joueur dans l'équipe 
       $array=array();
       for($i=0;$i<$nombreEquipe;$i++)
       {
           
           for($j=0;$j<$nombreJoueurRéel;$j++)
           {
               $array[]=$kj;
               $arrayJoueurs[$kj][$f] = $joueurs[$cpt]->getUser();
               $cpt++;
               $kj--;
               if($kj==-1)
               {
                 $kj=$nombreEquipe-1;
                 $f++;
               }
               
           }
       }
       
      
       
       
       //On Affecte les joueurs restants aux première equipes libres
       //$cpt=$nombreJoueurRéel;
       $tmp = $nombreJoueurRéel;
       for($i=0;$i<$nombreEquipe;$i++)
       {
           if($cpt!=$nombreJoueur ) //si on a pas inséré le nombre de joueurs totale
           {
              
              $arrayJoueurs[$i][$f] = $joueurs[$cpt]->getUser();
              $cpt++;
           }
           else
           {
               $i=$nombreEquipe;
           }
       }
       
       
    
       
       //insertion en BDD
     
       for($j=0;$j<$nombreEquipe;$j++)
       {
           $team = new Team();
           $nomEvent=$event->getNom();
           $team->setNom("team".$nomEvent.$j); 
           
           $tailleEquipe=count($arrayJoueurs[$j]); // la taille de l'équipe
           
           for($k=0;$k<$tailleEquipe;$k++)
           {
               $team->addJoueur($arrayJoueurs[$j][$k]);
               
           }
          
            $em->persist($team);
             $em->persist($event);
            $em->flush(); 
            
            $event->setIsGenerated(1); // les équipes ont été générés. 
             $event->addTeam($team);
             $em->persist($event);
                $em->flush(); 
            $teams[]=$team;
            
            
           
       }//fin for
       
            $this->GenerateMatch($event,$teams);
       }//fin else
       
   
       
            $view->setData($teams)->setStatusCode(200);
            return $view;
        
    }
    
     public function GenerateMatch($event,$teams)
    {
        //cela va généré n(n-1) match 
        $n=count($teams); // on compte le nombre d'équipes
        $nbMatch=$n*($n-1);
         $em = $this->getDoctrine()->getManager();
        for($i=0;$i<$n;$i++)
        {
            
            for($j=0;$j<$n;$j++)
            {
                if($i!=$j)
                {
                    $match=new Match();
                    $team1=$teams[$i];
                    $team2=$teams[$j];
                    $match->setTeam1($team1);
                    $match->setTeam2($team2);
                    $match->setDate(new \DateTime);
                    $match->setEvent($event);
                    $em->persist($match);
                    $em->flush();
                    
                    //statistiques par match et par user : 
                    $joueursTeam1=$team1->getJoueurs();
                    foreach($joueursTeam1 as $joueur)
                    {
                        $userMatch = new UserMatch();
                        $userMatch->setUser($joueur);
                        $userMatch->setMatch($match);
                        $userMatch->setEvent($event);
                         $em->persist($userMatch);
                        $em->flush();
                    }
                    
                     $joueursTeam2=$team2->getJoueurs();
                    foreach($joueursTeam2 as $joueur)
                    {
                        $userMatch = new UserMatch();
                        $userMatch->setUser($joueur);
                        $userMatch->setMatch($match);
                         $userMatch->setEvent($event);
                         $em->persist($userMatch);
                        $em->flush();
                    }
                    
                }
            }
        }
    }
    
    
}
