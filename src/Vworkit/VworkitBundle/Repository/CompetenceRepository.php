<?php

namespace Vworkit\VworkitBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * CompetenceRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CompetenceRepository extends EntityRepository
{
	public function byCategorie($categorie){
        $req = $this->createQueryBuilder('p')
                    
                    ->join('p.categorie','f')->select('f')
                    
                    ->where('f.nomCategories =:categorie')
                    ->select('p')
                    ->orderBy('p.id')
                    ->setParameter('categorie', $categorie);
        return $req->getQuery()->getResult();
    }
}
