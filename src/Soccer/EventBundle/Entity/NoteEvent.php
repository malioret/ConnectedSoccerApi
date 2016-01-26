<?php

namespace Soccer\EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Soccer\UserBundle\Entity\User;

/**
 * Event
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Soccer\EventBundle\Entity\NoteEventRepository")
 */
class NoteEvent
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
     * @var string
     *
     * @ORM\Column(name="note", type="integer")
     *
     */
    private $note;
   
   
  
      
       /**
    * @ORM\ManyToOne(targetEntity="Soccer\UserBundle\Entity\User")
    */
     private $user; 
     
     
     
       /**
    * @ORM\ManyToOne(targetEntity="Soccer\EventBundle\Entity\Event")
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
     * Set note
     *
     * @param integer $note
     *
     * @return NoteEvent
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return integer
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set user
     *
     * @param \Soccer\UserBundle\Entity\User $user
     *
     * @return NoteEvent
     */
    public function setUser(\Soccer\UserBundle\Entity\User $user = null)
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
     * Set event
     *
     * @param \Soccer\EventBundle\Entity\Event $event
     *
     * @return NoteEvent
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
}
