<?php

namespace Vworkit\VworkitBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * ReunionRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ReunionRepository extends EntityRepository
{
    public function RechercheByUser($user){
        $req = $this->createQueryBuilder('p')
                    ->select('p')
                    ->where('p.porteur =:id')
                    ->OrWhere('p.prestataire =:id')
                    ->orderBy('p.id')
                    ->setParameter('id', $user);
        return $req->getQuery()->getResult();
    }
    
    
    
    
}
