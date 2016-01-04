<?php

namespace SubwayBuddy\UserBundle\Controller;

use FOS\RestBundle\View\View as vieww;
use FOS\RestBundle\Controller\Annotations\RequestParam;
use FOS\RestBundle\Request\ParamFetcher;
use FOS\RestBundle\Controller\FOSRestController;
use SubwayBuddy\UserBundle\Entity\User;
use SubwayBuddy\UserBundle\Entity\Profil;
use FOS\RestBundle\Controller\Annotations\View;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\Controller\Annotations\Get;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;

class ProfilController extends FOSRestController
{
    
    
    
    /**
     * @Get
     * @return array
     * @View()
     */
    public function getProfilsAction()
    {
        
        $em = $this->getDoctrine()->getManager();

        $profils = $em->getRepository('SubwayBuddyUserBundle:Profil')->findAll();

        
        return array('profils' => $profils);
        
        
    }
    
    
    
     /**
     * @param Profil $profil
     * @return array
     * @View()
     * @ParamConverter("profil", class="SubwayBuddyUserBundle:Profil")
     */
    public function getProfilAction(Profil $profil)
    {
        return array('profil' => $profil);
    }
    

    
    
    
}
