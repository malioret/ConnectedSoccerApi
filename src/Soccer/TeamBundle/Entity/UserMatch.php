<?php

namespace Soccer\TeamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use SubwayBuddy\UserBundle\Entity\User;
use Soccer\TeamBundle\Entity\Match;
/**
 * Event
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Soccer\TeamBundle\Entity\UserMatchRepository")
 */
class UserMatch
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
    
    
      public function __construct()
    {
      
         $this->buts =0;
        $this->passeDecisives =0;
        $this->cartonsRouge=0;
        $this->cartonsJaune=0;
         
    }
    
    
      /**
   * @ORM\ManyToOne(targetEntity="Soccer\TeamBundle\Entity\Match", inversedBy="joueurs")
   * @ORM\JoinColumn(nullable=false)
   */
  private $match;

  /**
   * @ORM\ManyToOne(targetEntity="SubwayBuddy\UserBundle\Entity\User", inversedBy="matchs")
   * @ORM\JoinColumn(nullable=false)
   */
  private $user;
  
  
  /**
   * @ORM\ManyToOne(targetEntity="Soccer\EventBundle\Entity\Event")
   * @ORM\JoinColumn(nullable=false)
   */
  private $event;
  
    
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
     * @ORM\Column(name="cartonsRouges", type="integer")
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
     * Set user
     *
     * @param \SubwayBuddy\UserBundle\Entity\User $user
     *
     * @return UserMatch
     */
    public function setUser(\SubwayBuddy\UserBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \SubwayBuddy\UserBundle\Entity\User
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
     * @return UserMatch
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
     * @param Match $match
     *
     * @return UserMatch
     */
    public function setMatch(Match $match)
    {
        $this->match = $match;

        return $this;
    }

    /**
     * Get Match
     *
     * @return Match
     */
    public function getMatch()
    {
        return $this->match;
    }

    
    
    

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
        $this->user->addBut($nb); // on incrémente le nombre de but total de l'utilisateur
        
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
        $this->user->addPasseDecisives(); // on incrémente le nombre de passes total de l'utilisateur
        
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
        $this->user->addCartonsRouge($nb); // on incrémente le nombre de cartons total de l'utilisateur
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
        $this->user->addCartonsJaune($nb); // on incrémente le nombre de cartons total de l'utilisateur
        return $this->cartonsJaune;
    }        
    
}
