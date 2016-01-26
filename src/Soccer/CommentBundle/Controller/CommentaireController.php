<?php

namespace Soccer\CommentBundle\Controller;


use FOS\RestBundle\Controller\Annotations\RequestParam;
use FOS\RestBundle\View\View as Vieww;
use FOS\RestBundle\Request\ParamFetcher;
use FOS\RestBundle\Controller\FOSRestController;
use Soccer\EventBundle\Entity\Event;
use Soccer\CommentBundle\Entity\Commentaire;
use Soccer\EventBundle\Entity\TypeEvent;
use Soccer\EventBundle\Entity\UserEvent;
use Soccer\TeamBundle\Entity\Match;
use FOS\RestBundle\Controller\Annotations\View;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\Controller\Annotations\Get;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class CommentaireController extends FOSRestController
{
    /**
     * @Get
     * @return array
     * @View()
     */
    public function getCommentairesAction()
    {
        
        $em = $this->getDoctrine()->getManager();
        
        // Va récupérer toutes les lignes de la table 'commentaire'.
        $events = $em->getRepository('SoccerCommentBundle:Commentaire')->findAll();

        
        return array('commentaires' => $commentaires);
        
        
    }

    
    
    /**
     * @param Commentaire $commentaire
     * @return array
     * @View()
     * @ParamConverter("commentaire", class="SoccerCommentBundle:Commentaire")
     */
    public function getCommentaireAction(Commentaire $commentaire)
    {
        return array('commentaire' => $commentaire);
    }
    
    
    
    
    
    //crée un event
    /** @param ParamFetcher $paramFetcher Paramfetcher
     *
     * @RequestParam(name="message", nullable=false, strict=true, description="message.")
     * @RequestParam(name="idUser", nullable=false, strict=true, description="id_user.")
     * @RequestParam(name="idMatch", nullable=true, strict=true, description="id_user.")
     * 
     * @return View
     */
    public function postCommentaireAction(ParamFetcher $paramFetcher)
    {
        $commentaire=new Commentaire();
        
         $em = $this->getDoctrine()->getManager();

       // $event->setLieu($paramFetcher->get('lieu'));
        $commentaire->setMessage($paramFetcher->get('message'));
      
        
        $id=$paramFetcher->get('idUser');
        
        
         $user = $em->getRepository('SoccerUserBundle:User')->findOneById($id);
         $commentaire->setUser($user);
        
        
       $repositoryMatch = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SoccerTeamBundle:Match')
        ;  
     
        
           $id_match=$paramFetcher->get('idMatch');
           
           //si le champ type est non null
           if($id_match!=null)
           {
               $match=$repositoryMatch->findOneById($id_match);
               if($match!=null) //si le match existe
               {
                   $commentaire->setMatch($match);
               }
           }
          
        
        $view = Vieww::create();
      
        
           $em->persist($commentaire);
            $em->flush();
            $view->setData($commentaire)->setStatusCode(200);
            return $view;
        
    }


    // récupérer commentaires 
    /** @param ParamFetcher $paramFetcher Paramfetcher
     *
     * 
     *
     * @RequestParam(name="idMatch", nullable=false, strict=true, description="id match.")
     * 
     * @return View
     */
    public function postCommentaireByMatchAction(ParamFetcher $paramFetcher)
    {
       
        
         $em = $this->getDoctrine()->getManager();

       
      
        
      
        
       $repositoryMatch = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SoccerTeamBundle:Match')
        ;  
        
          
       $repositoryCommentaire= $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SoccerCommentBundle:Commentaire')
        ;
     
        
           $id_match=$paramFetcher->get('idMatch');
           
           $match=$repositoryMatch->findOneById($id_match);
           
          $commentaires=$repositoryCommentaire->findByMatch($match);
        
        $view = Vieww::create();
      
        //$data=array();
        $data["comments"]= $commentaires;
         
            $view->setData($data)->setStatusCode(200);
            return $view;
        
    }


    
    
    
    
    
    

    
}
