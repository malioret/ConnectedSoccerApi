<?php

namespace SubwayBuddy\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\Common\Collections\ArrayCollection;
use Soccer\EventBundle\Entity\Event;
use Soccer\EventBundle\Entity\UserEvent;
use SubwayBuddy\UserBundle\Entity\Profil;
use Soccer\TeamBundle\Entity\Poste;

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
   * @ORM\ManyToMany(targetEntity="SubwayBuddy\UserBundle\Entity\User")
   */
     private $amis; 
     
     
      /**
   * @ORM\ManyToMany(targetEntity="Soccer\TeamBundle\Entity\Poste")
   */
     private $postes;  
    
    
    
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
    $this->events[] = $event;
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
    
    
    
}
