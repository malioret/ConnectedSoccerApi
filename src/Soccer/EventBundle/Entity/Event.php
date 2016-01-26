<?php

namespace Soccer\EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Soccer\UserBundle\Entity\User;
use Soccer\EventBundle\Entity\UserEvent;
use Soccer\EventBundle\Entity\Event;
use Soccer\TeamBundle\Entity\Team;
use Soccer\TeamBundle\Entity\But;
use Soccer\TeamBundle\Entity\Match;

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
     * @var date
     *
     * @ORM\Column(name="date", type="string", length=11)
     *
     */
    private $date;
    
    
    
    /**
     * @var dateCreation
     *
     * @ORM\Column(name="dateCreation", type="date")
     *
     */
    private $dateCreation;
    
    
    
    /**
     * @var isGenerated
     *
     * @ORM\Column(name="isGenerated", type="integer")
     *
     */
    private $isGenerated;
    
    
     /**
     * @var isValidate
     *
     * @ORM\Column(name="isValidate", type="integer")
     *
     */
    private $isValidate;
   
   
   /**
     * @var nombreJoueurs
     *
     * @ORM\Column(name="nombreJoueurs", type="integer")
     *
     */
    private $nombreJoueurs;
   
   
     /**
   * @ORM\OneToMany(targetEntity="Soccer\TeamBundle\Entity\Match", mappedBy="event")
   */
     private $matchs;
   
   
     
     /**
    * @ORM\OneToMany(targetEntity="Soccer\EventBundle\Entity\UserEvent", mappedBy="event")
    */
     private $amis; 
    
       /**
    * @ORM\ManyToMany(targetEntity="Soccer\TeamBundle\Entity\Team", inversedBy="events")
    */
     private $teams; 
     
    /**
    * @ORM\ManyToOne(targetEntity="Soccer\UserBundle\Entity\User")
    */
     private $admin; 
     
     
    /**
   * @ORM\ManyToOne(targetEntity="Soccer\EventBundle\Entity\Terrain")
   * @ORM\JoinColumn(nullable=true)
   */
  private $terrain;
  
   /**
   * @ORM\ManyToOne(targetEntity="Soccer\EventBundle\Entity\TypeEvent")
   * @ORM\JoinColumn(nullable=true)
   */
  private $type;
   
   
   
   /**
   * @ORM\OneToMany(targetEntity="Soccer\CommentBundle\Entity\Commentaire", mappedBy="event")
   */
     private $commentaires;
   
   
   
   
   
    public function __construct()
    {
       
         $this->amis = new ArrayCollection();
         $this->teams = new ArrayCollection();
        $this->matchs = new ArrayCollection();
         $this->commentaires = new ArrayCollection();
          $this->isGenerated=0;
          $this->dateCreation=new \DateTime();
          $this->isValidate=0;
    }
   


     public function addMatch(Match $match)
  {
    if (!$this->matchs->contains($match)) {  
    $this->matchs[] = $match;
    }
    
    return $this;
  }

  public function removeMatch(Match $match)
  {
    $this->matchs->removeElement($match);

    
  }

  public function getMatchs()
  {
    return $this->matchs;
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
        $team->addEvent($this);
        return $this;
             
         }
      }

  public function removeTeam(Team $team)
  {
    $this->teams->removeElement($team);
    $team->removeEvent($this);

    
  }

  public function getTeams()
  {
    return $this->teams;
  }
  
      
    
    

    /**
     * Set nombreJoueurs
     *
     * @param integer $nombreJoueurs
     *
     * @return Event
     */
    public function setNombreJoueurs($nombreJoueurs)
    {
        $this->nombreJoueurs = $nombreJoueurs;

        return $this;
    }

    /**
     * Get nombreJoueurs
     *
     * @return integer
     */
    public function getNombreJoueurs()
    {
        return $this->nombreJoueurs;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Event
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set isGenerated
     *
     * @param integer $isGenerated
     *
     * @return Event
     */
    public function setIsGenerated($isGenerated)
    {
        $this->isGenerated = $isGenerated;

        return $this;
    }

    /**
     * Get isGenerated
     *
     * @return integer
     */
    public function getIsGenerated()
    {
        return $this->isGenerated;
    }

 public function setIsValidate($isValidate)
    {
        $this->isValidate = $isValidate;

        return $this;
    }

    /**
     * Get isGenerated
     *
     * @return integer
     */
    public function getIsValidate()
    {
        return $this->isValidate;
    }
    /**
     * Set admin
     *
     * @param \Soccer\UserBundle\Entity\User $admin
     *
     * @return Event
     */
    public function setAdmin(\Soccer\UserBundle\Entity\User $admin = null)
    {
        $this->admin = $admin;

        return $this;
    }

    /**
     * Get admin
     *
     * @return \Soccer\UserBundle\Entity\User
     */
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * Set terrain
     *
     * @param \Soccer\EventBundle\Entity\Terrain $terrain
     *
     * @return Event
     */
    public function setTerrain(\Soccer\EventBundle\Entity\Terrain $terrain)
    {
        $this->terrain = $terrain;

        return $this;
    }

    /**
     * Get terrain
     *
     * @return \Soccer\EventBundle\Entity\Terrain
     */
    public function getTerrain()
    {
        return $this->terrain;
    }

    /**
     * Set type
     *
     * @param \Soccer\EventBundle\Entity\TypeEvent $type
     *
     * @return Event
     */
    public function setType(\Soccer\EventBundle\Entity\TypeEvent $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \Soccer\EventBundle\Entity\TypeEvent
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Add commentaire
     *
     * @param \Soccer\CommentBundle\Entity\Commentaire $commentaire
     *
     * @return Event
     */
    public function addCommentaire(\Soccer\CommentBundle\Entity\Commentaire $commentaire)
    {
        $this->commentaires[] = $commentaire;

        return $this;
    }

    /**
     * Remove commentaire
     *
     * @param \Soccer\CommentBundle\Entity\Commentaire $commentaire
     */
    public function removeCommentaire(\Soccer\CommentBundle\Entity\Commentaire $commentaire)
    {
        $this->commentaires->removeElement($commentaire);
    }

    /**
     * Get commentaires
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCommentaires()
    {
        return $this->commentaires;
    }
}
