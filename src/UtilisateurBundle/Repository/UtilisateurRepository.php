<?php

namespace UtilisateurBundle\Repository;

/**
 * UtilisateurRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UtilisateurRepository extends \Doctrine\ORM\EntityRepository
{
    public function findAllExceptAdmin($id)
    {
        $qb = $this->createQueryBuilder('u');
        // On peut ajouter ce qu'on veut avant
        $qb
            ->where('u.id != :id')
            ->setParameter('id', $id)
        ;
        return $qb
            ->getQuery()
            ->getResult()
            ;
    }
}
