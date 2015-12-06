<?php

namespace SubwayBuddy\UserBundle\Controller;

use FOS\RestBundle\View\View as vieww;
use FOS\RestBundle\Controller\Annotations\RequestParam;
use FOS\RestBundle\Request\ParamFetcher;
use FOS\RestBundle\Controller\FOSRestController;
use SubwayBuddy\UserBundle\Entity\User;
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
    

    
    
    
    
    
    
    
   
    
    
    
}
