<?php

namespace Soccer\EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Soccer\UserBundle\Entity\User;

/**
 * Event
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Soccer\EventBundle\Entity\UserEventRepository")
 */
class UserEvent
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
    
   
    
    
      /**
   * @ORM\ManyToOne(targetEntity="Soccer\EventBundle\Entity\Event", inversedBy="amis")
   * @ORM\JoinColumn(nullable=false)
   */
  private $event;

  /**
   * @ORM\ManyToOne(targetEntity="Soccer\UserBundle\Entity\User", inversedBy="events")
   * @ORM\JoinColumn(nullable=false)
   */
  private $user;
    
    
    /**
   * @ORM\ManyToOne(targetEntity="Soccer\EventBundle\Entity\Status")
   * @ORM\JoinColumn(nullable=false)
   */
  private $status;
    
     
    

    /**
     * Set event
     *
     * @param \Soccer\EventBundle\Entity\Event $event
     *
     * @return UserEvent
     */
    public function setEvent(\Soccer\EventBundle\Entity\Event $event)
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
     * Set user
     *
     * @param \Soccer\UserBundle\Entity\User $user
     *
     * @return UserEvent
     */
    public function setUser(\Soccer\UserBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Soccer\UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

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
    
    
    
    
    
            
}
