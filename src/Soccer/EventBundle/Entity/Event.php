<?php

namespace Soccer\EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use SubwayBuddy\UserBundle\Entity\User;
use Soccer\EventBundle\Entity\UserEvent;
use Soccer\TeamBundle\Entity\Team;
use Soccer\TeamBundle\Entity\But;


/**
 * Event
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Soccer\EventBundle\Entity\EventRepository")
 */
class Event
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
   
   
   /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string",  length=255)
     *
     */
    private $lieu;
   
   
   
   /**
     * @var date
     *
     * @ORM\Column(name="date", type="string", length=11)
     *
     */
    private $date;
   
   
   
      
       /**
    * @ORM\OneToMany(targetEntity="Soccer\TeamBundle\Entity\But", mappedBy="event")
    */
     private $buts; 
   
   
   
    public function __construct()
    {
       
         $this->amis = new ArrayCollection();
         $this->teams = new ArrayCollection();
          $this->buts = new ArrayCollection();
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
     * Get lieu
     *
     * @return string
     */
    public function getLieu()
    {
        return $this->lieu;
    }
    
    
      /**
     * Get date
     *
     * @return date
     */
    public function getDate()
    {
        return $this->date;
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
     * Set lieu
     *
     * @param string $lieu
     *
     * @return Event
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;

        return $this;
    }

    /**
     * Set date
     *
     * @param string $date
     *
     * @return Event
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }
    
    
     /**
    * @ORM\OneToMany(targetEntity="Soccer\EventBundle\Entity\UserEvent", mappedBy="event")
    */
     private $amis; 
    
       /**
    * @ORM\ManyToMany(targetEntity="Soccer\TeamBundle\Entity\Team")
    */
     private $teams; 
     
   
    
  
    
      public function addAmi(UserEvent $ami)
      {
         if (!$this->amis->contains($ami)) {
        $this->amis[] = $ami;
       // $ami->addEvent($this);
        return $this;
             
         }
      }

  public function removeAmi(UserEvent $ami)
  {
    $this->amis->removeElement($ami);
   // $ami->removeAmi($this);

    
  }

  public function getAmis()
  {
    return $this->amis;
  }
     
    
    
      public function addTeam(Team $team)
      {
         if (!$this->teams->contains($team)) {
        $this->teams[] = $team;
       // $ami->addEvent($this);
        return $this;
             
         }
      }

  public function removeTeam(Team $team)
  {
    $this->teams->removeElement($team);
   // $ami->removeAmi($this);

    
  }

  public function getTeams()
  {
    return $this->teams;
  }
  
      
      public function addBut(But $but)
      {
         if (!$this->buts->contains($but)) {
        $this->buts[] = $but;
       // $ami->addEvent($this);
        return $this;
             
         }
      }

  public function removeBut(But $but)
  {
    $this->buts->removeElement($but);
   // $ami->removeAmi($this);

    
  }

  public function getButs()
  {
    return $this->buts;
  }
    
    
    
}
