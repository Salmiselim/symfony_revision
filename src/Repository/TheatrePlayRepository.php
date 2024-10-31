<?php

namespace App\Repository;

use App\Entity\TheatrePlay;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TheatrePlay>
 */
class TheatrePlayRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TheatrePlay::class);
    }

    //    /**
    //     * @return TheatrePlay[] Returns an array of TheatrePlay objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('t')
    //            ->andWhere('t.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('t.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?TheatrePlay
    //    {
    //        return $this->createQueryBuilder('t')
    //            ->andWhere('t.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
    public function findBytitleDuration()
        {
            return $this->createQueryBuilder('s')
                ->orderBy('s.title', 'ASC')
                ->setMaxResults(10)
                ->getQuery()
//                ->getResult()
                ->getDQL()

            ;
        }

}
