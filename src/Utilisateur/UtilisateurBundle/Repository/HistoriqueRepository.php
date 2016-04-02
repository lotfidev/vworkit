<?php

namespace Utilisateur\UtilisateurBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * HistoriqueRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class HistoriqueRepository extends EntityRepository
{
    public function byUser($id_user){
        $req = $this->createQueryBuilder('p')
                    ->select('p')
                    ->where('p.user =:user')
                    ->orderBy('p.id')
                    ->setParameter('user', $id_user);
                    $req->setMaxResults(5);
        return $req->getQuery()->getResult();
    }

    public function byhisto($id_user){
        $req = $this->createQueryBuilder('p')
                    ->select('p')
                    ->where('p.user =:user')
                    ->orderBy('p.id')
                    ->setParameter('user', $id_user);
                    
        return $req->getQuery()->getResult();
    }
}
