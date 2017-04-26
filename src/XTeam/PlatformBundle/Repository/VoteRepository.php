<?php

namespace XTeam\PlatformBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * ResponseRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class VoteRepository extends EntityRepository
{
    public function getCount()
        {
            return $this->createQueryBuilder('id')
                ->select('COUNT(id)')
                ->getQuery()
                ->getSingleScalarResult();
        }

}