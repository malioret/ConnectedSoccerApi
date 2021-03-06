<?php

namespace Soccer\EvolutionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Soccer\UserBundle\Entity\User;

/**
 * Event
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Soccer\EvolutionBundle\Entity\Badge")
 */
class BadgeType
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
     * @ORM\Column(name="nom", type="string", length=255)
     *
     */
    private $nom;
   
   
  
      
/**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     *
     */
     private $description; 
     
     
      
/**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255)
     *
     */
     private $image; 
     
     
     
/**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=255)
     *
     */
     private $code; 
      
/**
     * @var number
     *
     * @ORM\Column(name="points", type="integer")
     *
     */
     private $points; 
   
    
    
   
  

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
     * @return BadgeType
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
     * Set description
     *
     * @param string $description
     *
     * @return BadgeType
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set points
     *
     * @param integer $points
     *
     * @return BadgeType
     */
    public function setPoints( $points)
    {
        $this->points = $points;

        return $this;
    }

    /**
     * Get points
     *
     * @return integer
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return BadgeType
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return BadgeType
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }
}
