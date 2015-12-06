<?php

namespace Soccer\TeamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use SubwayBuddy\UserBundle\Entity\User;
use Soccer\EventBundle\Entity\UserEvent;
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
    * @ORM\ManyToMany(targetEntity="SubwayBuddy\UserBundle\Entity\User")
    */
     private $joueur; 
    
    
     
   
    
  
    
      public function addJoueur(User $joueur)
      {
         if (!$this->joueurs->contains($joueur)) {
        $this->joueurs[] = $joueur;
       // $ami->addEvent($this);
        return $this;
             
         }
      }

  public function removeJoueur(User $joueur)
  {
    $this->joueurs->removeElement($joueur);
   // $ami->removeAmi($this);

    
  }

  public function getJoueurs()
  {
    return $this->joueurs;
  }
     
    
}
