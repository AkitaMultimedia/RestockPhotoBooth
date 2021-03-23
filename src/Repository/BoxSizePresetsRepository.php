<?php

namespace App\Repository;

use App\Entity\BoxSizePresets;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method BoxSizePresets|null find($id, $lockMode = null, $lockVersion = null)
 * @method BoxSizePresets|null findOneBy(array $criteria, array $orderBy = null)
 * @method BoxSizePresets[]    findAll()
 * @method BoxSizePresets[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BoxSizePresetsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BoxSizePresets::class);
    }

    // /**
    //  * @return BoxSizePresets[] Returns an array of BoxSizePresets objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BoxSizePresets
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
