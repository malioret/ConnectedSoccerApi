<?php

namespace SubwayBuddy\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;
use Soccer\EventBundle\Entity\Event;
use Soccer\EventBundle\Entity\UserEvent;
use SubwayBuddy\UserBundle\Entity\User;

/**
 * Profil
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="SubwayBuddy\UserBundle\Entity\NotificationRepository")
 */
class Notification 
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
     * @ORM\Column(name="message", type="string" , length=255)
     * 
     */
    private $message;
    
     /**
     * @var date
     *
     * @ORM\Column(name="date", type="date")
     * 
     */
    private $date;
    
    
       
       /**
    * @ORM\ManyToOne(targetEntity="SubwayBuddy\UserBundle\Entity\User")
    */
     private $user1; 
     
          
       /**
    * @ORM\ManyToOne(targetEntity="SubwayBuddy\UserBundle\Entity\User")
    */
     private $user2; 

     /**
    * @ORM\ManyToOne(targetEntity="Soccer\EventBundle\Entity\Event")
    */
     private $event; 
    
     /**
    * @ORM\ManyToOne(targetEntity="Soccer\TeamBundle\Entity\Match")
    */
     private $match; 

  
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
     * Set message
     *
     * @param string $message
     *
     * @return Notification
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Notification
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set user1
     *
     * @param \SubwayBuddy\UserBundle\Entity\User $user1
     *
     * @return Notification
     */
    public function setUser1(\SubwayBuddy\UserBundle\Entity\User $user1 = null)
    {
        $this->user1 = $user1;

        return $this;
    }

    /**
     * Get user1
     *
     * @return \SubwayBuddy\UserBundle\Entity\User
     */
    public function getUser1()
    {
        return $this->user1;
    }

    /**
     * Set user2
     *
     * @param \SubwayBuddy\UserBundle\Entity\User $user2
     *
     * @return Notification
     */
    public function setUser2(\SubwayBuddy\UserBundle\Entity\User $user2 = null)
    {
        $this->user2 = $user2;

        return $this;
    }

    /**
     * Get user2
     *
     * @return \SubwayBuddy\UserBundle\Entity\User
     */
    public function getUser2()
    {
        return $this->user2;
    }

    /**
     * Set event
     *
     * @param \Soccer\EventBundle\Entity\Event $event
     *
     * @return Notification
     */
    public function setEvent(\Soccer\EventBundle\Entity\Event $event = null)
    {
        $this->event = $event;

        return $this;
    }

    /**
     * Get event
     *
     * @return \Soccer\EventBundle\Entity\Event
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Set match
     *
     * @param \Soccer\TeamBundle\Entity\Match $match
     *
     * @return Notification
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
}