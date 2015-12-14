<?php

namespace SubwayBuddy\UserBundle\Controller;

use FOS\RestBundle\View\View as vieww;
use FOS\RestBundle\Controller\Annotations\RequestParam;
use FOS\RestBundle\Request\ParamFetcher;
use FOS\RestBundle\Controller\FOSRestController;
use SubwayBuddy\UserBundle\Entity\User;
use SubwayBuddy\UserBundle\Entity\Notification;
use SubwayBuddy\UserBundle\Entity\TypeNotification;
use Soccer\EventBundle\Entity\Status;
use FOS\RestBundle\Controller\Annotations\View;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\Controller\Annotations\Get;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;

class FriendsController extends FOSRestController
{
     /**
     * @param User $user
     * @return array
     * @View()
     * @ParamConverter("user", class="SubwayBuddyUserBundle:User")
     */
    public function getFriendsAction(User $user)
    {
        
        $friends=$user->getAmis();
        return array('user' => $friends);
    }
    

     /**
     * Create a User from the submitted data.<br/>
     *
     * 
     *
     * @param ParamFetcher $paramFetcher Paramfetcher
     *
     * 
     * @RequestParam(name="id_demandeur", nullable=false, strict=true, description="Id user.")
     * @RequestParam(name="id_recepteur", nullable=false, strict=true, description="Id user.")
     *
     * @return View
     */
    public function postDemandeAmiAction(ParamFetcher $paramFetcher)
    {
        
        
        
        
        $em = $this->getDoctrine()->getManager();
        
        // Va récupérer toutes les lignes de la table 'notif'.
        $repositoryNotification = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SubwayBuddyUserBundle:Notification')
        ;  
        
        $repositoryUser = $this
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

        $view = Vieww::create();
        if($paramFetcher->get('id_recepteur')!=$paramFetcher->get('id_demandeur'))
        {
            
            $userDemandeur=$repositoryUser->findOneById($paramFetcher->get('id_demandeur'));
            $userRecepteur=$repositoryUser->findOneById($paramFetcher->get('id_recepteur'));
            $typeNotification=$repositoryTypeNotification->findOneById(1); //type amis
            $notification=$repositoryNotification->findNotificationByDemandeurRecepteur($userDemandeur,$userRecepteur,$typeNotification);
            if($notification!=null)// si la notification existe deja on retourne l'ancienne
            {
                $view->setData($notification)->setStatusCode(200);
                return $view;  
            }
            //sinon
            $notification=new Notification();
         
        
            $notification->setUserDemandeur($userDemandeur);
            $notification->setUserRecepteur($userRecepteur);
           
            $notification->setType($typeNotification);
       
            $message=$typeNotification->getType()." par ".$userDemandeur->getUsername();
            $notification->setMessage($message);
            
            $status=$repositoryStatus->findOneById(2);
            $notification->setStatus($status);
            
            $em->persist($notification);
            $em->flush();
            
            $view->setData($notification)->setStatusCode(200);
            return $view;
        } else {
            $view->setData("false")->setStatusCode(400);
           // $view = $this->getErrorsView($errors);
            return $view;
        }

    }
    
    
    
    
    
    
    
   
    
    
    
}
