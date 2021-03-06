<?php

namespace Utilisateur\UtilisateurBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * PlaisirRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PlaisirRepository extends EntityRepository
{
    public function byPlaisir($id_user){
        $req = $this->createQueryBuilder('p')
                    ->select('p')
                    ->where('p.user =:user')
                    ->orderBy('p.id')
                    ->setParameter('user', $id_user);
        return $req->getQuery()->getResult();
    }
}
