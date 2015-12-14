<?php

namespace Soccer\TeamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use SubwayBuddy\UserBundle\Entity\User;
use Soccer\EventBundle\Entity\UserEvent;
use Soccer\EventBundle\Entity\Event;
/**
 * Event
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Soccer\TeamBundle\Entity\TeamRepository")
 */
class Team
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
     * @ORM\Column(name="nom", type="string",  length=255)
     *
     */
    private $nom;
   
   
 
   
    public function __construct()
    {
       
         $this->joueurs = new ArrayCollection();
           $this->events = new ArrayCollection();
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
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }
    
    
    
    
    


    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Event
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    
     /**
    * @ORM\ManyToMany(targetEntity="SubwayBuddy\UserBundle\Entity\User", inversedBy="teams" )
    */
     private $joueurs; 
    
    
    
     /**
    * @ORM\ManyToMany(targetEntity="Soccer\EventBundle\Entity\Event", mappedBy="teams" )
    */
     private $events; 
    
    
     
   
    
  
    
      public function addJoueur(User $joueur)
      {
         if (!$this->joueurs->contains($joueur)) {
        $this->joueurs[] = $joueur;
        $joueur->addTeam($this);
        return $this;
             
         }
      }

  public function removeJoueur(User $joueur)
  {
    $this->joueurs->removeElement($joueur);
    $joueur->removeTeam($this);

    
  }

  public function getJoueurs()
  {
    return $this->joueurs;
  }
  
  
  
      public function addEvent(Event $event)
      {
         if (!$this->events->contains($event)) {
        $this->events[] = $event;
        //$joueur->addTeam($this);
        return $this;
             
         }
      }

  public function removeEvent(Event $event)
  {
    $this->events->removeElement($event);
   // $joueur->removeTeam($this);

    
  }

  public function getEvents()
  {
    return $this->events;
  }
  
  
  
     
    
}
