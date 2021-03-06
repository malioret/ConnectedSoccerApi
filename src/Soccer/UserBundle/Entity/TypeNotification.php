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
 * @ORM\Entity(repositoryClass="Soccer\UserBundle\Entity\TypeNotificationRepository")
 */
class TypeNotification 
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
     * @ORM\Column(name="type", type="string" , length=255)
     * 
     */
    private $type;
    
    

  
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
     * Set type
     *
     * @param string $type
     *
     * @return TypeNotification
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}
