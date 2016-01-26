<?php

namespace Soccer\UserBundle\Controller;

use FOS\RestBundle\View\View as vieww;
use FOS\RestBundle\Controller\Annotations\RequestParam;
use FOS\RestBundle\Request\ParamFetcher;
use FOS\RestBundle\Controller\FOSRestController;
use Soccer\UserBundle\Entity\User;
use Soccer\UserBundle\Entity\Notification;
use FOS\RestBundle\Controller\Annotations\View;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\Controller\Annotations\Get;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;

class NotificationController extends FOSRestController
{
    
    
    
    /**
     * @Get
     * @return array
     * @View()
     */
    public function getNotificationsAction()
    {
        
        $em = $this->getDoctrine()->getManager();

        $notifications = $em->getRepository('SoccerUserBundle:Notification')->findAll();

        
        return array('notifications' => $notifications);
        
        
    }
    
    
    
     /**
     * @param Notification $notification
     * @return array
     * @View()
     * @ParamConverter("notification", class="SoccerUserBundle:Notification")
     */
    public function getNotificationAction(Notification $notification)
    {
        return array('notification' => $notification);
    }
    

    /**
     * Create a User from the submitted data.<br/>
     *
     * 
     *
     * @param ParamFetcher $paramFetcher Paramfetcher
     *
     * 
     * @RequestParam(name="id_user", nullable=false, strict=true, description="Id user.")
     *
     *
     * @return View
     */
    public function postNotificationUserAction(ParamFetcher $paramFetcher)
    {
        
        
        
        
        $em = $this->getDoctrine()->getManager();
        
        // Va récupérer toutes les lignes de la table 'notif'.
     $repository = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SoccerUserBundle:Notification')
        ;  
        
     
        $view = Vieww::create();
        if($paramFetcher->get('id_user')!=null)
        {
           
        
        $notifications["notifications"]=$repository->findByUserRecepteur($paramFetcher->get('id_user'));
        
        
       
            $view->setData($notifications)->setStatusCode(200);
            return $view;
        } else {
            $view->setData("false")->setStatusCode(400);
           // $view = $this->getErrorsView($errors);
            return $view;
        }

    }
    
    
    /**
     * 
     *
     * 
     *
     * @param ParamFetcher $paramFetcher Paramfetcher
     *
     * 
     * @RequestParam(name="id", nullable=false, strict=true, description="Id notification")
     * @RequestParam(name="id_status", nullable=false, strict=true, description="Id")
     *
     * @return View
     */
    public function putNotificationAction(ParamFetcher $paramFetcher)
    {
        
        
        
        
        $em = $this->getDoctrine()->getManager();
        
        // Va récupérer toutes les lignes de la table 'notif'.
     $repository = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SoccerUserBundle:Notification')
        ;  
        
         $repositoryUserEvent = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SoccerEventBundle:UserEvent')
        ;
     
     
          $repositoryUser = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SoccerUserBundle:User')
            ; 
             
              $repositoryStatus = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SoccerEventBundle:Status')
            ; 
            
            
        $view = Vieww::create();
        if($paramFetcher->get('id')!=null)
        {
           
            //on récupère la notif
            $notification=$repository->findOneById($paramFetcher->get('id'));
            //on recupere le type de notif (1 : demande d'amis, 2 : demande event, 3 : match)
            $type=$notification->getType();
             //on recupere le status par defaut (en attente) 
             $status=$repositoryStatus->findOneById($paramFetcher->get('id_status'));
             $notification->setStatus($status);
            if($type->getId()==1) //demande d'amis
            {
                if($status->getId()==1)// si la demande a été accepté
                {
                    $userDemandeur=$notification->getUserDemandeur();
                    $userRecepteur=$notification->getUserRecepteur();
                    
                    $userDemandeur->addAmi($userRecepteur);
                    $userRecepteur->addAmi($userDemandeur);
                     $em->persist($notification);
                     $em->persist($userDemandeur);
                      $em->persist($userRecepteur);
                     $em->flush();
                }
                else{
                    
                    
                }
                
            }
            elseif($type->getId()==2) //demande event 
            {
                
            //on recupere l'utilisateur
             $user=$notification->getUserRecepteur();
             // On recupere l'event
             $event=$notification->getEvent();
            
             $userEvent=$repositoryUserEvent->findByEventAndUser($event, $user);
             $userEvent->setStatus($status);
             
             
                $em->persist($notification);
                $em->persist($userEvent);
               $em->persist($event);
               $em->persist($user);
                $em->flush();
          }
        
       
            $view->setData($notification)->setStatusCode(200);
            return $view;
        } else {
            $view->setData("false")->setStatusCode(400);
           // $view = $this->getErrorsView($errors);
            return $view;
        }

    }
    
    
    
    
    
   
    
    
    
}
