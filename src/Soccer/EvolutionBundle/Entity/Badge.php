<?php

namespace Soccer\EvolutionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Soccer\UserBundle\Entity\User;

/**
 * Event
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Soccer\EvolutionBundle\Entity\BadgeRepository")
 */
class Badge
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
     * @var date
     *
     * @ORM\Column(name="date_obtention", type="date")
     *
     */
    private $date_obtention;
   
   
   
  
      
       /**
    * @ORM\ManyToOne(targetEntity="Soccer\UserBundle\Entity\User")
    */
     private $user;
     
     
     
     
       /**
    * @ORM\ManyToOne(targetEntity="Soccer\TeamBundle\Entity\Match")
    */
     private $match;
     
     
      
       /**
    * @ORM\ManyToOne(targetEntity="Soccer\EventBundle\Entity\Event")
    */
     private $event;
     
     
     
     
     /**
    * @ORM\ManyToOne(targetEntity="Soccer\EvolutionBundle\Entity\BadgeType")
    */
     private $type;
     
     
     
     
      public function __construct()
    {
        
        $this->date_obtention=new \DateTime();
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
     * Set dateObtention
     *
     * @param \DateTime $dateObtention
     *
     * @return Badge
     */
    public function setDateObtention($dateObtention)
    {
        $this->date_obtention = $dateObtention;

        return $this;
    }

    /**
     * Get dateObtention
     *
     * @return \DateTime
     */
    public function getDateObtention()
    {
        return $this->date_obtention;
    }

    /**
     * Set type
     *
     * @param \Soccer\EvolutionBundle\Entity\BadgeType $type
     *
     * @return Badge
     */
    public function setType(\Soccer\EvolutionBundle\Entity\BadgeType $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \Soccer\EvolutionBundle\Entity\BadgeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set match
     *
     * @param \Soccer\TeamBundle\Entity\Match $match
     *
     * @return Badge
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
     * @param \Soccer\EventBundle\Entity\Event $event
     *
     * @return Badge
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
