<?php

namespace Soccer\EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use SubwayBuddy\UserBundle\Entity\User;

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
   * @ORM\ManyToOne(targetEntity="Soccer\EventBundle\Entity\Event")
   * @ORM\JoinColumn(nullable=false)
   */
  private $event;

  /**
   * @ORM\ManyToOne(targetEntity="SubwayBuddy\UserBundle\Entity\User")
   * @ORM\JoinColumn(nullable=false)
   */
  private $user;
    
    
    
    
     
    
}
