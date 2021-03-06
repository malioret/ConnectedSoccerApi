<?php

namespace Soccer\UserBundle\Entity;

/**
 * UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class NotificationRepository extends \Doctrine\ORM\EntityRepository
{
    
    
    
     public function findNotificationByDemandeurRecepteur($demandeur,$recepteur,$type)
    {
      return $this
        ->createQueryBuilder('u')
         ->where("u.userDemandeur= :demandeur  and u.userRecepteur=:recepteur and u.type=:type")
           ->setParameter(':demandeur',$demandeur)
           ->setParameter(':recepteur',$recepteur)
            ->setParameter(':type',$type)
         ->orderBy('u.id', 'ASC')
        ->getQuery()
        ->getResult()
      ;
    }
    
    
    /*
    public function findAllOperationUser($user,$page, $nbPerPage)
  {
    $query = $this->createQueryBuilder('a')
            ->Join('a.client', 'client')
                ->addSelect('client')
            ->Join('a.collaborateurs', 'collabotateurs')
                ->addSelect('collabotateurs')
         ->where("collabotateurs.id=:user")
         ->orderBy('a.date', 'ASC')
         ->setParameter(':user', $user)
        ->getQuery();

    $query
      // On définit l'annonce à partir de laquelle commencer la liste
      ->setFirstResult(($page-1) * $nbPerPage)
      // Ainsi que le nombre d'annonce à afficher sur une page
      ->setMaxResults($nbPerPage)
    ;

    // Enfin, on retourne l'objet Paginator correspondant à la requête construite
    // (n'oubliez pas le use correspondant en début de fichier)
    return new Paginator($query, true);
  }
  
    
    */
    
    
}
