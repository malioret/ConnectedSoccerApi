<?php

namespace Soccer\TeamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Event
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Soccer\TeamBundle\Entity\PosteRepository")
 */
class Poste
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
     * @ORM\Column(name="code", type="string",  length=255)
     *
     */
    private $code;
 
   
   

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
     * Get nom
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }
    
    
    
    
    


    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Event
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }


   
     
    
}
