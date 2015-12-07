<?php

namespace Soccer\TeamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * But
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class But
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
     * @var integer
     *
     * @ORM\Column(name="nombre", type="integer")
    
     */
    protected $nombre;




     /**
    * @ORM\ManyToOne(targetEntity="SubwayBuddy\UserBundle\Entity\User", inversedBy="buts")
    */
     private $user; 
     
     
     
     /**
    * @ORM\ManyToOne(targetEntity="Soccer\TeamBundle\Entity\Match", inversedBy="buts")
    */
     private $match; 
     
     
       /**
    * @ORM\ManyToOne(targetEntity="Soccer\EventBundle\Entity\event", inversedBy="buts")
    */
     private $event; 
     
     
     

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
     * Set user
     *
     * @param \SubwayBuddy\UserBundle\Entity\User $user
     *
     * @return But
     */
    public function setUser(\SubwayBuddy\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \SubwayBuddy\UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set nombre
     *
     * @param integer $nombre
     *
     * @return But
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return integer
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set match
     *
     * @param \Soccer\TeamBundle\Entity\Match $match
     *
     * @return But
     */
    public function setMatch(\Soccer\TeamBundle\Entity\Match $match = null)
    {
        $this->match = $match;

        return $this;
    }

    /**
     * Get match
     *
     * @return \Soccer\TeamBundle\Entity\Match
     */
    public function getMatch()
    {
        return $this->match;
    }

    /**
     * Set event
     *
     * @param \Soccer\EventBundle\Entity\event $event
     *
     * @return But
     */
    public function setEvent(\Soccer\EventBundle\Entity\event $event = null)
    {
        $this->event = $event;

        return $this;
    }

    /**
     * Get event
     *
     * @return \Soccer\EventBundle\Entity\event
     */
    public function getEvent()
    {
        return $this->event;
    }
}
