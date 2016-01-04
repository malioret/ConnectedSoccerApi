<?php

namespace Soccer\EventBundle\Entity;

/**
 * UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TerrainRepository extends \Doctrine\ORM\EntityRepository
{
    
     public function  findByLongitudeLatitude($longitude,$latitude)
    {
       $query= $this
        ->createQueryBuilder('t')
         ->where("t.longitude=:longitude and t.latitude=:latitude ")
           ->setParameter(':longitude',$longitude)
           ->setParameter(':latitude',$latitude)
         ->orderBy('t.id', 'ASC')
        ->getQuery()
        ;
          try {
        return $query->getSingleResult();
    } catch (\Doctrine\ORM\NoResultException $e) {
        return null;
    }
        
        
      ;
    }
    
      public function  findByLongitudeLatitudeOrAdresse($longitude,$latitude,$adresse)
    {
       $query= $this
        ->createQueryBuilder('t')
         ->where("(t.longitude=:longitude and t.latitude=:latitude) or t.adresse=:adresse ")
           ->setParameter(':longitude',$longitude)
           ->setParameter(':latitude',$latitude)
            ->setParameter(':adresse',$adresse)
         ->orderBy('t.id', 'ASC')
        ->getQuery()
        ;
          try {
        return $query->getSingleResult();
    } catch (\Doctrine\ORM\NoResultException $e) {
        return null;
    }
        
        
      ;
    }
    
    
}


