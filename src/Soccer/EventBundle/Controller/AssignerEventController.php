<?php

namespace Soccer\EventBundle\Controller;


use FOS\RestBundle\Controller\Annotations\RequestParam;
use FOS\RestBundle\View\View as Vieww;
use FOS\RestBundle\Request\ParamFetcher;
use FOS\RestBundle\Controller\FOSRestController;
use Soccer\EventBundle\Entity\Event;
use Soccer\EventBundle\Entity\UserEvent;
use SubwayBuddy\UserBundle\Entity\User;
use FOS\RestBundle\Controller\Annotations\View;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Put;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class AssignerEventController extends FOSRestController
{
    
    
    
    
    
     /**
     * Update a User from the submitted data by ID.<br/>
     *
     *
     * 
     * @param ParamFetcher $paramFetcher Paramfetcher
     *
     * @RequestParam(name="id", nullable=false, strict=true, description="id.")
     * @RequestParam(name="id_user", nullable=false, strict=true, description="id_user.")
     *
     * @return View
     */
    public function putAssignerEventAction(ParamFetcher $paramFetcher)
    {
        
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
            
            $event=$repositoryEvent->findOneById($paramFetcher->get('id'));
        
          $em = $this->getDoctrine()->getManager();

      
        
        //On verifie que l'affectation n'a pas déja été faite : 
        $userEventTest=$repositoryUserEvent->findByEventAndUser($paramFetcher->get('id'), $paramFetcher->get('id_user'));
        
      //  var_dump($userEventTest);
         $view = Vieww::create();
        if($paramFetcher->get('id_user') && $userEventTest==null)
        {
             $repository = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SubwayBuddyUserBundle:User')
            ; 
             
              $repositoryStatus = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SoccerEventBundle:Status')
            ; 

      //on recupere l'utilisateur
         $user=$repository->findOneById($paramFetcher->get('id_user'));
         
         //on recupere le status par defaut (en attente) 
          $status=$repositoryStatus->findOneById(2);
           
         //on crée une relation User -> Event  (JOINTURE)
         $userEvent=new UserEvent();
         $userEvent->setEvent($event);
         $userEvent->setUser($user);
         $userEvent->setStatus($status);
         
         
         
            //on lie les relations (on associe à la jointure)
            $event->addAmi($userEvent); 
            $user->addEvent($userEvent);
            
            
           
        
            $em->persist($userEvent);
           $em->persist($event);
           $em->persist($user);
            $em->flush();
            $view->setData($event)->setStatusCode(200);
            return $view;
        }
        else
        {
            $view->setData("false")->setStatusCode(400);
            return $view;
        }
        
       
    }



    /**
     * Update a User from the submitted data by ID.<br/>
     *
     *
     * 
     * @param ParamFetcher $paramFetcher Paramfetcher
     *
     * @RequestParam(name="id", nullable=false, strict=true, description="id.")
     * @RequestParam(name="id_user", nullable=false, strict=true, description="id_user.")
     *
     * @return View
     */
    public function deleteAssignerEventAction(ParamFetcher $paramFetcher)
    {
        
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
            
            $event=$repositoryEvent->findOneById($paramFetcher->get('id'));
        
          $em = $this->getDoctrine()->getManager();

      
        
        //On verifie que l'affectation existe 
        $userEvent=$repositoryUserEvent->findByEventAndUser($paramFetcher->get('id'), $paramFetcher->get('id_user'));
        
      //  var_dump($userEventTest);
         $view = Vieww::create();
        if($paramFetcher->get('id_user') && $userEvent!=null)
        {
             $repository = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SubwayBuddyUserBundle:User')
            ; 
             
              $repositoryStatus = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SoccerEventBundle:Status')
            ; 

      //on recupere l'utilisateur
         $user=$repository->findOneById($paramFetcher->get('id_user'));
         
         //on recupere le status par defaut (en attente) 
          $status=$repositoryStatus->findOneById(2);
           
        
      
         
         
         
            //on  délie les relations (on associe à la jointure)
            $event->removeAmi($userEvent); 
            $user->removeEvent($userEvent);
            
            
           
        
          
           $em->persist($event);
           $em->persist($user);
             $em->remove($userEvent);
            $em->flush();
            $view->setData($event)->setStatusCode(200);
            return $view;
        }
        else
        {
            $view->setData("false")->setStatusCode(400);
            return $view;
        }
        
       
    }



    
}
