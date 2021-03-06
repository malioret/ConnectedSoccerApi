<?php

namespace Soccer\UserBundle\Controller;

use FOS\RestBundle\View\View as vieww;
use FOS\RestBundle\Controller\Annotations\RequestParam;
use FOS\RestBundle\Request\ParamFetcher;
use FOS\RestBundle\Controller\FOSRestController;
use Soccer\UserBundle\Entity\User;
use Soccer\UserBundle\Entity\Notification;
use Soccer\UserBundle\Entity\TypeNotification;
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
     * @ParamConverter("user", class="SoccerUserBundle:User")
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
     * @RequestParam(name="id", nullable=false, strict=true, description="Id user.")
     * @RequestParam(name="username", nullable=false, strict=true, description="nom.")
     *
     * @return View
     */
    public function postRecherchePasAmiAction(ParamFetcher $paramFetcher)
    {
        
         $em = $this->getDoctrine()->getManager();

        $username=$paramFetcher->get('username');
        $id=$paramFetcher->get('id');
        $userConnected=$em->getRepository('SoccerUserBundle:User')->findOneById($id);
        $users = $em->getRepository('SoccerUserBundle:User')->findAllUserNoFriendByUsername($id,$username);
        $usersNofriends=array();
        foreach($users as $user)
        {
            if(!$userConnected->getAmis()->contains($user))
            {
               $usersNofriends[]=$user;
            }
        }
        
        
        return array('users' => $usersNofriends);
        
        
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
            ->getRepository('SoccerUserBundle:Notification')
        ;  
        
        $repositoryUser = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SoccerUserBundle:User')
        ;  
        
          
            $repositoryTypeNotification = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SoccerUserBundle:TypeNotification')
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
    
    
    
    /**
     * Create a User from the submitted data.<br/>
     *
     * @param ParamFetcher $paramFetcher Paramfetcher
     *
     * @RequestParam(array=true, name="ids", nullable=false, strict=true, description="list ids.")
     * @RequestParam(name="id_demandeur", nullable=false, strict=true, description="Id user.")
     * @RequestParam(name="option", nullable=true, strict=true, description="option.")
     * 
     * @return View
     */
    public function postDemandeListeAmiAction(ParamFetcher $paramFetcher)
    {
        
        
        
        
        $em = $this->getDoctrine()->getManager();
        
        // Va récupérer toutes les lignes de la table 'notif'.
        $repositoryNotification = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SoccerUserBundle:Notification')
        ;  
        
        $repositoryUser = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SoccerUserBundle:User')
        ;  
        
          
            $repositoryTypeNotification = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SoccerUserBundle:TypeNotification')
            ; 
     
     
     
              $repositoryStatus = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('SoccerEventBundle:Status')
            ; 

        $view = Vieww::create();
        
        
        //on recupere le joueur qui demande : 
         $userDemandeur=$repositoryUser->findOneById($paramFetcher->get('id_demandeur'));
        
        //on recupere la liste des joueurs
        $ids=$paramFetcher->get('ids');
        
        foreach($ids as $user)
        {
            // le joueur avec qui il veut être ami
             $userRecepteur=$repositoryUser->findOneById($user);
             //si le joueur est different du joueur avec qui il veut être ami
            if($userRecepteur!=$userDemandeur && ($userRecepteur!=null && $userDemandeur!=null))
            {
                $option=$paramFetcher->get('option');
                if($option!=null && $option=="force")
                {
                    //on ajoute en amis 
                     $userDemandeur->addAmi($userRecepteur);
                     $userRecepteur->addAmi($userDemandeur);
                     $em->persist($userDemandeur);
                      $em->persist($userRecepteur);
                     $em->flush();
                     
                     
                     
                }
                else
                {
                     $typeNotification=$repositoryTypeNotification->findOneById(1); //type amis
                     $notification=$repositoryNotification->findNotificationByDemandeurRecepteur($userDemandeur,$userRecepteur,$typeNotification);
                    if($notification!=null)// si la notification existe deja on retourne l'ancienne
                    {
                      //  $view->setData($notification)->setStatusCode(200);
                        //return $view;  
                    }
                    else
                    {
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
                    
                    //$view->setData($notification)->setStatusCode(200);
                        
                    }
                }
               
                   // return $view;
                }//fin if
                else {
                //$view->setData("false")->setStatusCode(400);
               // $view = $this->getErrorsView($errors);
                //return $view;
         }
            
        }//fin foreach
        $data=array();
         $data["user"]=$userDemandeur;
         $data["amis"]=$userDemandeur->getAmis();
        $view->setData($data)->setStatusCode(200);
        return $view;
        
        

    }
    
    
    
    
    
    
    
   
    
    
    
}
