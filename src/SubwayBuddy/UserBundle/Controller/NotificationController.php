<?php

namespace SubwayBuddy\UserBundle\Controller;

use FOS\RestBundle\View\View as vieww;
use FOS\RestBundle\Controller\Annotations\RequestParam;
use FOS\RestBundle\Request\ParamFetcher;
use FOS\RestBundle\Controller\FOSRestController;
use SubwayBuddy\UserBundle\Entity\User;
use SubwayBuddy\UserBundle\Entity\Notification;
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

        $notifications = $em->getRepository('SubwayBuddyUserBundle:Notification')->findAll();

        
        return array('notifications' => $notifications);
        
        
    }
    
    
    
     /**
     * @param Notification $notification
     * @return array
     * @View()
     * @ParamConverter("notification", class="SubwayBuddyUserBundle:Notification")
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
            ->getRepository('SubwayBuddyUserBundle:Notification')
        ;  
        
     
        $view = Vieww::create();
        if($paramFetcher->get('id_user')!=null)
        {
           
        
        $notifications=$repository->findByUser2($paramFetcher->get('id_user'));
        
        
       
            $view->setData($notifications)->setStatusCode(200);
            return $view;
        } else {
            $view->setData("false")->setStatusCode(400);
           // $view = $this->getErrorsView($errors);
            return $view;
        }

    }
    
    
    
    
    
    
    
   
    
    
    
}
