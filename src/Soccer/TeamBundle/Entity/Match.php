<?php

namespace Soccer\TeamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Match
 *
 * @ORM\Table()
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
     * @var string
     *
     * @ORM\Column(name="score", type="string",  length=255)
     *
     */
    private $score;
    
    
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
    * @ORM\ManyToOne(targetEntity="Soccer\TeamBundle\Entity\Team")
    */
     private $team1; 
     
     
       
     /**
    * @ORM\ManyToOne(targetEntity="Soccer\TeamBundle\Entity\Team")
    */
     private $team2; 
    
    
    

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
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get score
     *
     * @return string
     */
    public function getScore()
    {
        return $this->score;
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
}
