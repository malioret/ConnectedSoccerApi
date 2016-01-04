<?php

namespace Soccer\EventBundle\Controller;


use FOS\RestBundle\Controller\Annotations\RequestParam;
use FOS\RestBundle\View\View as Vieww;
use FOS\RestBundle\Request\ParamFetcher;
use FOS\RestBundle\Controller\FOSRestController;
use Soccer\EventBundle\Entity\Event;
use Soccer\EventBundle\Entity\Terrain;
use Soccer\EventBundle\Entity\TypeEvent;
use Soccer\EventBundle\Entity\UserEvent;
use Soccer\TeamBundle\Entity\Team;
use FOS\RestBundle\Controller\Annotations\View;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\Controller\Annotations\Get;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class EventController extends FOSRestController
{
    /**
     * @Get
     * @return array
     * @View()
     */
    public function getEventsAction()
    {
        
        $em = $this->getDoctrine()->getManager();
        
        // Va récupérer toutes les lignes de la table 'event'.
        $events = $em->getRepository('SoccerEventBundle:Event')->findAll();

        
        return array('events' => $events);
        
        
    }

    
    
    /**
     * @param Event $event
     * @return array
     * @View()
     * @ParamConverter("event", class="SoccerEventBundle:Event")
     */
    public function getEventAction(Event $event)
    {
        return array('event' => $event);
    }
    
    
    
    //crée un event
    /** @param ParamFetcher $paramFetcher Paramfetcher
     *
     * @RequestParam(name="nom", nullable=false, strict=true, description="nom.")
     * @RequestParam(name="lieu", nullable=true, strict=true, description="lieu.")
     * @RequestParam(name="date", nullable=false, strict=true, description="date.")
     * @RequestParam(name="nombreJoueurs", nullable=false, strict=true, description="date.")
     * @RequestParam(name="id", nullable=true, description="id admin.")
     * @RequestParam(name="adresse", nullable=true, description="id admin.")
     * @RequestParam(name="longitude", nullable=true, description="id admin.")
     * @RequestParam(name="latitude", nullable=true, description="id admin.")
     * @RequestParam(name="type", nullable=true, description="id admin.")
     * 
     * @return View
     */
    public function postEventAction(ParamFetcher $paramFetcher)
    {
        $event=new Event();
        
         $em = $this->getDoctrine()->getManager();

        
        $event->setNom($paramFetcher->get('nom'));
        $event->setLieu($paramFetcher->get('lieu'));
        $event->setDate($paramFetcher->get('date'));
        $event->setNombreJoueurs($paramFetcher->get('nombreJoueurs'));
        
        if($paramFetcher->get('id')==null)
            $id=1;
        else
            $id=$paramFetcher->get('id');
        
        
         $admin = $em->getRepository('SubwayBuddyUserBundle:User')->findOneById($id);
        $event->setAdmin($admin);
        
        
        //------------------------------------gestion de terrain : 
         $repositoryTerrain = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SoccerEventBundle:Terrain')
        ;   
         $repositoryType = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SoccerEventBundle:TypeEvent')
        ;   
        
        $adresse=$paramFetcher->get('adresse');
        $longitude=$paramFetcher->get('longitude');
        $latitude=$paramFetcher->get('latitude');
        
        //on verifie si les champs sont pas null
        if(($adresse!=null) || ($latitude!=null && $longitude!=null) )
        {
              //verification si le terrain existe deja.
            $terrain=$repositoryTerrain->findByLongitudeLatitudeOrAdresse($longitude,$latitude,$adresse);
            if($terrain==null)
            {
                 $terrain=new Terrain();
            
                 $em = $this->getDoctrine()->getManager();
        
                
                $terrain->setAdresse($adresse);
                $terrain->setLongitude($longitude);
                $terrain->setLatitude($latitude);
                 $em->persist($terrain);
                $em->flush();
            }
            $event->setTerrain($terrain); //on associe le terrain à l'event
        }
      
     
         //------------------------------------ fin gestion de terrain : 
        
           $type=$paramFetcher->get('type');
           
           //si le champ type est non null
           if($type!=null)
           {
               $typeEvent=$repositoryType->findOneByCode($type);
               if($typeEvent!=null) //si le type existe
               {
                   $event->setType($typeEvent);
               }
           }
           else{
               $typeEvent=$repositoryType->findOneByCode("L"); // on prend le type par défaut : ligue
                $event->setType($typeEvent);
           }
        
        
        
        $view = Vieww::create();
      
        
           $em->persist($event);
            $em->flush();
            $view->setData($event)->setStatusCode(200);
            return $view;
        
    }



    /** @param ParamFetcher $paramFetcher Paramfetcher
     *
     * @RequestParam(name="id", nullable=false, strict=true, description="id.")
     * 
     * @return View
     */
    public function postEventUserAction(ParamFetcher $paramFetcher)
    {
        $event=new Event();
        
         $em = $this->getDoctrine()->getManager();

        
       $em = $this->getDoctrine()->getManager();
        
        // Va récupérer toutes les lignes de la table 'event'.
        $event = $em->getRepository('SoccerEventBundle:Event')->findOneById($paramFetcher->get('id'));

       $userEvent=$em->getRepository('SoccerEventBundle:UserEvent')-> findByUserParticipe($event);
      
        $view = Vieww::create();
      
        
          
            $view->setData($userEvent)->setStatusCode(200);
            return $view;
        
    }


    //récupère les utilisateur en attente pour l"event
     /** @param ParamFetcher $paramFetcher Paramfetcher
     *
     * @RequestParam(name="id", nullable=false, strict=true, description="id.")
     * 
     * @return View
     */
    public function postEventUserAttenteAction(ParamFetcher $paramFetcher)
    {
        $event=new Event();
        
         $em = $this->getDoctrine()->getManager();

        
       $em = $this->getDoctrine()->getManager();
        
        // Va récupérer toutes les lignes de la table 'event'.
        $event = $em->getRepository('SoccerEventBundle:Event')->findOneById($paramFetcher->get('id'));

       $userEvent=$em->getRepository('SoccerEventBundle:UserEvent')-> findByUserParticipeAndAttente($event);
      
        $view = Vieww::create();
      
        
          
            $view->setData($userEvent)->setStatusCode(200);
            return $view;
        
    }





    // crée un event avec une liste de team
    /** @param ParamFetcher $paramFetcher Paramfetcher
     *
     * @RequestParam(array=true, name="ids", nullable=false, strict=true, description="List of ids")
     * @RequestParam(name="nom", nullable=false, strict=true, description="nom.")
     * @RequestParam(name="lieu", nullable=false, strict=true, description="lieu.")
     * @RequestParam(name="date", nullable=false, strict=true, description="date.")
     * @RequestParam(name="nombreJoueurs", nullable=false, strict=true, description="nombres joueurs.")
     * @RequestParam(name="adresse", nullable=true, description="id admin.")
     * @RequestParam(name="longitude", nullable=true, description="id admin.")
     * @RequestParam(name="latitude", nullable=true, description="id admin.")
     * @RequestParam(name="type", nullable=true, description="id admin.")
     * 
     * @return View
     */
    public function postEventTeamAction(ParamFetcher $paramFetcher)
    {
        $event=new Event();
        
         $em = $this->getDoctrine()->getManager();

        
        $event->setNom($paramFetcher->get('nom'));
        $event->setLieu($paramFetcher->get('lieu'));
        $event->setDate($paramFetcher->get('date'));
        $event->setNombreJoueurs($paramFetcher->get('nombreJoueurs'));
       
        $em = $this->getDoctrine()->getManager();

        $ids=$paramFetcher->get('ids');
        $repositoryTeam = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SoccerTeamBundle:Team')
        ;   
        
        $em->persist($event);
            $em->flush();
        
        foreach($ids as $id)
        {
            $team=$repositoryTeam->findOneById($id);
            
            if($team!=null)
                $event->addTeam($team);
        }
       
         //------------------------------------gestion de terrain : 
         $repositoryTerrain = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SoccerEventBundle:Terrain')
        ;   
         $repositoryType = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SoccerEventBundle:TypeEvent')
        ;   
        
        $adresse=$paramFetcher->get('adresse');
        $longitude=$paramFetcher->get('longitude');
        $latitude=$paramFetcher->get('latitude');
        
        //on verifie si les champs sont pas null
        if(($adresse!=null) || ($latitude!=null && $longitude!=null) )
        {
              //verification si le terrain existe deja.
            $terrain=$repositoryTerrain->findByLongitudeLatitudeOrAdresse($longitude,$latitude,$adresse);
            if($terrain==null)
            {
                 $terrain=new Terrain();
            
                 $em = $this->getDoctrine()->getManager();
        
                
                $terrain->setAdresse($adresse);
                $terrain->setLongitude($longitude);
                $terrain->setLatitude($latitude);
                 $em->persist($terrain);
                $em->flush();
            }
            $event->setTerrain($terrain); //on associe le terrain à l'event
        }
      
     
         //------------------------------------ fin gestion de terrain : 
        
           $type=$paramFetcher->get('type');
           
           //si le champ type est non null
           if($type!=null)
           {
               $typeEvent=$repositoryType->findOneByCode($type);
               if($typeEvent!=null) //si le type existe
               {
                   $event->setType($typeEvent);
               }
           }
           else{
               $typeEvent=$repositoryType->findOneByCode("L"); // on prend le type par défaut : ligue
                $event->setType($typeEvent);
           }
       
       
        $view = Vieww::create();
      
        
           $em->persist($event);
            $em->flush();
            $view->setData($event)->setStatusCode(200);
            return $view;
        
    }
    
    
    
    
    


    
}
