<?php

namespace Soccer\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;
use Soccer\EventBundle\Entity\Event;
use Soccer\EventBundle\Entity\UserEvent;
use Soccer\UserBundle\Entity\User;

/**
 * Profil
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Soccer\UserBundle\Entity\NotificationRepository")
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
    
    
    //l'utilisateur qui envoi   
       /**
    * @ORM\ManyToOne(targetEntity="Soccer\UserBundle\Entity\User")
    */
     private $userDemandeur; 
     
    //L'utilisateur qui recoit      
       /**
    * @ORM\ManyToOne(targetEntity="Soccer\UserBundle\Entity\User")
    */
     private $userRecepteur; 

     /**
    * @ORM\ManyToOne(targetEntity="Soccer\EventBundle\Entity\Event")
    */
     private $event; 
    
     /**
    * @ORM\ManyToOne(targetEntity="Soccer\TeamBundle\Entity\Match")
    */
     private $match; 

  
      /**
   * @ORM\ManyToOne(targetEntity="Soccer\UserBundle\Entity\TypeNotification")
   * 
   */
  private $type;
  
  
    
    /**
   * @ORM\ManyToOne(targetEntity="Soccer\EventBundle\Entity\Status")
   * @ORM\JoinColumn(nullable=false)
   */
  private $status;
  
  
  /**
     * Set status
     *
     * @param \Soccer\EventBundle\Entity\Status $status
     *
     * @return UserEvent
     */
    public function setStatus(\Soccer\EventBundle\Entity\Status $status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return \Soccer\EventBundle\Entity\Status
     */
    public function getStatus()
    {
        return $this->status;
    }
  
  
    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
    
    

    public function __construct()
    {
       
        
          $this->date=new \DateTime();
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

    /**
     * Set type
     *
     * @param \Soccer\UserBundle\Entity\TypeNotification $type
     *
     * @return Notification
     */
    public function setType(\Soccer\UserBundle\Entity\TypeNotification $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \Soccer\UserBundle\Entity\TypeNotification
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set userDemandeur
     *
     * @param \Soccer\UserBundle\Entity\User $userDemandeur
     *
     * @return Notification
     */
    public function setUserDemandeur(\Soccer\UserBundle\Entity\User $userDemandeur = null)
    {
        $this->userDemandeur = $userDemandeur;

        return $this;
    }

    /**
     * Get userDemandeur
     *
     * @return \Soccer\UserBundle\Entity\User
     */
    public function getUserDemandeur()
    {
        return $this->userDemandeur;
    }

    /**
     * Set userRecepteur
     *
     * @param \Soccer\UserBundle\Entity\User $userRecepteur
     *
     * @return Notification
     */
    public function setUserRecepteur(\Soccer\UserBundle\Entity\User $userRecepteur = null)
    {
        $this->userRecepteur = $userRecepteur;

        return $this;
    }

    /**
     * Get userRecepteur
     *
     * @return \Soccer\UserBundle\Entity\User
     */
    public function getUserRecepteur()
    {
        return $this->userRecepteur;
    }
}
