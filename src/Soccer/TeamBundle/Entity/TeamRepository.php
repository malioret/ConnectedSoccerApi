<?php

namespace Soccer\TeamBundle\Entity;

/**
 * UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TeamRepository extends \Doctrine\ORM\EntityRepository
{
    
    
    
       public function findTeamsByEvent($event)
    {
      $query= $this
        ->createQueryBuilder('t')
         ->join('t.events', 'event')
            ->addSelect('event')
         ->where("event.id= :event ")
           ->setParameter(':event',$event)
         ->orderBy('t.id', 'ASC')
        ->getQuery()
        ;
          try {
        return $query->getResult();
    } catch (\Doctrine\ORM\NoResultException $e) {
        return null;
    }
    
}

}
