<?php

namespace Soccer\EventBundle\Controller;


use FOS\RestBundle\Controller\Annotations\RequestParam;
use FOS\RestBundle\View\View as Vieww;
use FOS\RestBundle\Request\ParamFetcher;
use FOS\RestBundle\Controller\FOSRestController;
use Soccer\EventBundle\Entity\Event;
use SubwayBuddy\UserBundle\Entity\Notification;
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
     * @RequestParam(name="id_user_owner", nullable=true, description="id_user_owner.")
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
            
        $notification=new Notification();
        $notification->setUser2($user);
        $message="Vous avez reçu une demande pour l'event : ".$event->getNom();   
           if($paramFetcher->get('id_user_owner')!=null)
           {
               $userOwner=$repository->findOneById($paramFetcher->get('id_user_owner'));
               $notification->setUser1($userOwner);
               $message=$message." par ".$userOwner->getNom();
           }
           
        $notification->setMessage($message);   
        $notification->setEvent($event);
        $notification->setDate(new \DateTime());
        
        
            $em->persist($userEvent);
           $em->persist($event);
           $em->persist($user);
            $em->flush();
            
            $em->persist($notification);
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
     * @RequestParam(name="id_status", nullable=false, strict=true, description="reponse.")
     * 
     *
     * @return View
     */
    public function putUpdateAssignerEventAction(ParamFetcher $paramFetcher)
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

      
        
        //On verifie que l'affectation a été faite : 
        $userEventTest=$repositoryUserEvent->findByEventAndUser($paramFetcher->get('id'), $paramFetcher->get('id_user'));
        
      //  var_dump($userEventTest);
         $view = Vieww::create();
        if($paramFetcher->get('id_user') && $userEventTest!=null)
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
          $status=$repositoryStatus->findOneById($paramFetcher->get('id_status'));
           
         //on crée une relation User -> Event  (JOINTURE)
         $userEvent=$repositoryUserEvent->findByEventAndUser($event, $user);
         $userEvent->setStatus($status);
         
         

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
     * @RequestParam(array=true, name="ids", nullable=false, strict=true, description="list ids.")
     * @RequestParam(name="id_user_owner", nullable=true, description="id_user_owner.")
     *
     * @return View
     */
    public function putAssignerEventListAction(ParamFetcher $paramFetcher)
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

         $view = Vieww::create();
        //on recupere le tableau
      $ids=$paramFetcher->get('ids');
        
        foreach($ids as $id)
        {
            
            
            
        $reponse=true;
        
        //On verifie que l'affectation n'a pas déja été faite : 
        $userEventTest=$repositoryUserEvent->findByEventAndUser($paramFetcher->get('id'), $id);
        
      //  var_dump($userEventTest);
        
        if(  $userEventTest==null)
        {
             $repository = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SubwayBuddyUserBundle:User')
            ; 
            
            
            $repositoryTypeNotification = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SubwayBuddyUserBundle:TypeNotification')
            ; 
             
              $repositoryStatus = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SoccerEventBundle:Status')
            ; 

      //on recupere l'utilisateur
      
        
      
      
         $user=$repository->findOneById($id);
         
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
            
        $notification=new Notification();
        $notification->setUser2($user);
        $message="Vous avez reçu une demande pour l'event : ".$event->getNom();   
           if($paramFetcher->get('id_user_owner')!=null)
           {
               $userOwner=$repository->findOneById($paramFetcher->get('id_user_owner'));
               $notification->setUser1($userOwner);
               $message=$message." par ".$userOwner->getNom();
           }
           
        $notification->setMessage($message);   
        $notification->setEvent($event);
        $notification->setDate(new \DateTime());
        
        $typeNotif=$repositoryTypeNotification->findOneById(2);
        $notification->setType($typeNotif);
        
        
            $em->persist($userEvent);
           $em->persist($event);
           $em->persist($user);
            $em->flush();
            
            $em->persist($notification);
            $em->flush();
            
            
            }//fin if
            else
            {
                $reponse=false;
                
            }
        }//fin for
        
        if($reponse==true)
        {
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
