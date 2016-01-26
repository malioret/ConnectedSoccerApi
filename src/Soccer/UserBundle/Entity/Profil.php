<?php

namespace Soccer\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;
use Soccer\EventBundle\Entity\Event;
use Soccer\EventBundle\Entity\UserEvent;


/**
 * Profil
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Soccer\UserBundle\Entity\ProfilRepository")
 */
class Profil 
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    
     
    
    /**
     * @var profil
     *
     * @ORM\Column(name="profil", type="string" , length=255)
     * 
     */
    private $profil;
    
    

  
    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
    
    

    
    /**
     * Set profil
     *
     * @param string $profil
     *
     * @return string
     */
    public function setProfil($profil)
    {
        $this->profil = $profil;
    }

    /**
     * Get profil
     *
     * @return string
     */
    public function getProfil()
    {
        return $this->profil;
    }
    
   

 
    
    
}
