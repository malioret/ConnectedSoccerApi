<?php

namespace Soccer\TeamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Match
 *
 *  @ORM\Table(name="matchs")
 * @ORM\Entity(repositoryClass="Soccer\TeamBundle\Entity\MatchRepository")
 */
class Match
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
     * @var integer
     *
     * @ORM\Column(name="scoreTeam1", type="integer")
     *
     */
    private $scoreTeam1;
   
   
   
    
/**
     * @var integer
     *
     * @ORM\Column(name="scoreTeam2", type="integer")
     *
     */
    private $scoreTeam2;
   
   
   
    
/**
     * @var date
     *
     * @ORM\Column(name="date", type="date")
     *
     */
    private $date;
    
    
    
/**
     * @var isFinished
     *
     * @ORM\Column(name="isFinished", type="integer")
     *
     */
    private $isFinished;
   
   
/**
     * @var isStarted
     *
     * @ORM\Column(name="isStarted", type="integer")
     *
     */
    private $isStarted;
   
   
       
     /**
    * @ORM\ManyToOne(targetEntity="Soccer\TeamBundle\Entity\Team")
    */
     private $team1; 
     
     
       
     /**
    * @ORM\ManyToOne(targetEntity="Soccer\TeamBundle\Entity\Team")
    */
     private $team2; 
    
       
    /**
   * @ORM\OneToMany(targetEntity="Soccer\TeamBundle\Entity\UserMatch", mappedBy="match")
   */
     private $joueurs;
     
     
     /**
   * @ORM\ManyToOne(targetEntity="Soccer\EventBundle\Entity\Event", inversedBy="matchs")
   */
     private $event;
      

      public function __construct()
    {
      
         $this->scoreTeam2 =0;
        $this->scoreTeam1 =0;
        $this->isStarted=0;
        $this->isFinished=0;
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
     * Set score
     *
     * @param string $score
     *
     * @return Match
     */
    public function setIsFinished($finish)
    {
        $this->isFinished = $finish;

        return $this;
    }

    /**
     * Get score
     *
     * @return string
     */
    public function getIsFinished()
    {
        return $this->isFinished;
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
     * Set score
     *
     * @param string $score
     *
     * @return Match
     */
    public function setIsStarted($start)
    {
        $this->isStarted = $start;

        return $this;
    }

    /**
     * Get score
     *
     * @return string
     */
    public function getIsStarted()
    {
        return $this->isStarted;
    }


    /**
     * Get score
     *
     * @return string
     */
    public function getScore()
    {
        return $this->scoreTeam1." - ".scoreTeam2;
    }

    /**
     * Set scoreTeam1
     *
     * @param integer $scoreTeam1
     *
     * @return Match
     */
    public function setScoreTeam1($scoreTeam1)
    {

        return $this;
    }

    /**
     * Get scoreTeam1
     *
     * @return integer
     */
    public function getScoreTeam1()
    {
        return $this->scoreTeam1;
    }

    /**
     * Set scoreTeam2
     *
     * @param integer $scoreTeam2
     *
     * @return Match
     */
    public function setScoreTeam2($scoreTeam2)
    {
        $this->scoreTeam2 = $scoreTeam2;

        return $this;
    }

    /**
     * Get scoreTeam2
     *
     * @return integer
     */
    public function getScoreTeam2()
    {
        return $this->scoreTeam2;
    }

    /**
     * Set team1
     *
     * @param \Soccer\TeamBundle\Entity\Team $team1
     *
     * @return Match
     */
    public function setTeam1(\Soccer\TeamBundle\Entity\Team $team1 = null)
    {
        $this->team1 = $team1;

        return $this;
    }

    /**
     * Get team1
     *
     * @return \Soccer\TeamBundle\Entity\Team
     */
    public function getTeam1()
    {
        return $this->team1;
    }

    /**
     * Set team2
     *
     * @param \Soccer\TeamBundle\Entity\Team $team2
     *
     * @return Match
     */
    public function setTeam2(\Soccer\TeamBundle\Entity\Team $team2 = null)
    {
        $this->team2 = $team2;

        return $this;
    }

    /**
     * Get team2
     *
     * @return \Soccer\TeamBundle\Entity\Team
     */
    public function getTeam2()
    {
        return $this->team2;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Match
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }
    

     public function addJoueur(UserMatch $joueur)
  {
    if (!$this->joueurs->contains($joueur)) {  
    $this->joueurs[] = $joueur;
    }
    
    return $this;
  }

  public function removeJoueur(UserMatch $joueur)
  {
    $this->joueurs->removeElement($joueur);

    
  }

  public function getJoueurs()
  {
    return $this->joueurs;
  }
  
   
}
