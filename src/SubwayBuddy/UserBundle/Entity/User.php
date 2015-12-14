<?php

namespace SubwayBuddy\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\Common\Collections\ArrayCollection;
use Soccer\EventBundle\Entity\Event;
use Soccer\EventBundle\Entity\UserEvent;
use SubwayBuddy\UserBundle\Entity\Profil;
use Soccer\TeamBundle\Entity\Poste;
use Soccer\TeamBundle\Entity\But;
use Soccer\TeamBundle\Entity\Team;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="SubwayBuddy\UserBundle\Entity\UserRepository")
 */
class User extends BaseUser
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
     * @var name
     *
     * @ORM\Column(name="name", type="string" , length=255)
     * 
     */
    private $nom;
    
    /**
   * @ORM\ManyToMany(targetEntity="SubwayBuddy\UserBundle\Entity\Profil")
   */
    private $profils;
    
    /**
     * @var name
     *
     * @ORM\Column(name="niveau", type="integer" , length=3)
     * 
     */
    private $niveau;

    public function __construct()
    {
        parent::__construct();
         $this->events = new ArrayCollection();
         $this->amis = new ArrayCollection();
           $this->matchs = new ArrayCollection();
         $this->teams = new ArrayCollection();
          $this->profils = new ArrayCollection();
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
     * Set nom
     *
     * @param string $nom
     *
     * @return User
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
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
     * Set niveau
     *
     * @param integer $niveau
     *
     * @return integer
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;
    }

    /**
     * Get niveau
     *
     * @return integer
     */
    public function getNiveau()
    {
        return $this->niveau;
    }
    
   
    /**
   * @ORM\OneToMany(targetEntity="Soccer\EventBundle\Entity\UserEvent", mappedBy="user")
   */
     private $events; 
     
     
    /**
   * @ORM\OneToMany(targetEntity="Soccer\TeamBundle\Entity\UserMatch", mappedBy="user")
   */
     private $matchs;
    
     /**
   * @ORM\ManyToMany(targetEntity="SubwayBuddy\UserBundle\Entity\User")
   */
     private $amis; 
     
     
      /**
   * @ORM\ManyToMany(targetEntity="Soccer\TeamBundle\Entity\Poste")
   */
     private $postes;  
     
     
     /**
   * @ORM\ManyToMany(targetEntity="Soccer\TeamBundle\Entity\Team", mappedBy="joueurs")
   */
     private $teams; 
     
     
     
     
     /*
     
    ************ STATISTIQUES ************
     */
     
        /**
     * @var name
     *
     * @ORM\Column(name="buts", type="integer")
     * 
     */
  private $buts;
    
     
     /**
     * @var name
     *
     * @ORM\Column(name="passeDecisives", type="integer")
     * 
     */
  private $passeDecisives;
  
  
  
     /**
     * @var name
     *
     * @ORM\Column(name="cartonsRouge", type="integer")
     * 
     */
  private $cartonsRouge;
  
  
    /**
     * @var name
     *
     * @ORM\Column(name="cartonsJaune", type="integer")
     * 
     */
  private $cartonsJaune;
   

 
     
     
      /**
     * 
     *
     * @return UserMatch
     */
    public function setButs($buts)
    {
        $this->buts = $buts;

        return $this;
    }

    /**
     * Get buts
     *
     * @return integer
     */
    public function getButs()
    {
        return $this->buts;
    }

    /**
     * Get buts
     *
     * @return integer
     */
    public function addBut($nb)
    {
        $this->buts+=$nb;
        return $this->buts;
    }
    
    
    
       /**
     * 
     *
     * @return UserMatch
     */
    public function setPasseDecisives($passes)
    {
        $this->passeDecisives = $passes;

        return $this;
    }

    /**
     * Get buts
     *
     * @return integer
     */
    public function getPasseDecisives()
    {
        return $this->passeDecisives;
    }
            
            
      public function addPasseDecisives($nb)
    {
        $this->passeDecisives+=$nb;
        return $this->passeDecisives;
    }        
    
    
    
       /**
     * 
     *
     * @return UserMatch
     */
    public function setCartonsRouge($carton)
    {
        $this->cartonsRouges = $carton;

        return $this;
    }

    /**
     * Get buts
     *
     * @return integer
     */
    public function getCartonsRouge()
    {
        return $this->cartonsRouge;
    }
            
            
      public function addCartonsRouge($nb)
    {
        $this->cartonsRouge+=$nb;
        return $this->cartonRouge;
    }        
    
    
      /**
     * 
     *
     * @return UserMatch
     */
    public function setCartonsJaune($carton)
    {
        $this->cartonsJaune= $carton;

        return $this;
    }

    /**
     * Get buts
     *
     * @return integer
     */
    public function getCartonsJaune()
    {
        return $this->cartonsJaune;
    }
            
            
      public function addCartonsJaune($nb)
    {
        $this->cartonsJaune+=$nb;
        return $this->cartonsJaune;
    }        
    
    /*
    *********** FIN STATISTIQUES
    */
    
    public function addEvent(UserEvent $event)
  {
    if (!$this->events->contains($event)) {  
    $this->events[] = $event;
    }
    
    return $this;
  }

  public function removeEvent(UserEvent $event)
  {
    $this->events->removeElement($event);

    
  }

  public function getEvents()
  {
    return $this->events;
  }
  
   
    public function addMatch(UserMatch $match)
  {
    if (!$this->matchs->contains($match)) {  
    $this->matchs[] = $match;
    }
    
    return $this;
  }

  public function removeMatch(UserMatch $match)
  {
    $this->matchs->removeElement($match);

    
  }

  public function getMatchs()
  {
    return $this->matchs;
  }
  
    
    
     public function addPoste(Poste $poste)
  {
    if (!$this->postes->contains($poste)) {  
    $this->postes[] = $poste;
    }
    
    return $this;
  }

  public function removePoste(Poste $poste)
  {
    $this->postes->removePoste($poste);

    
  }

  public function getPostes()
  {
    return $this->postes;
  }
    
    
    
    
    public function addProfil(Profil $profil)
  {
    if (!$this->profils->contains($profil)) {  
    $this->profils[] = $profil;
    }
    
    return $this;
  }

  public function removeProfil(Profil $profil)
  {
    $this->profils->removeElement($profil);

    
  }

  public function getProfils()
  {
    return $this->profils;
  }
  
    
    
    public function addAmi(User $ami)
  {
    if (!$this->amis->contains($ami)) {  
    $this->amis[] = $ami;
    }
    
    return $this;
  }

  public function removeAmi(User $ami)
  {
    $this->amis->removeElement($ami);

    
  }

  public function getAmis()
  {
    return $this->amis;
  }
    
   
  
  
  
   public function addTeam(Team $team)
  {
    if (!$this->teams->contains($but)) {  
    $this->teams[] = $team;
    }
    
    return $this;
  }

  public function removeTeam(Team $team)
  {
    $this->teams->removeElement($team);

    
  }

  public function getTeams()
  {
    return $this->teams;
  }
  
  
  
  
    
    
    
}
