<?php

namespace App\Repository;

use App\Entity\EmailsForData;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method EmailsForData|null find($id, $lockMode = null, $lockVersion = null)
 * @method EmailsForData|null findOneBy(array $criteria, array $orderBy = null)
 * @method EmailsForData[]    findAll()
 * @method EmailsForData[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EmailsForDataRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EmailsForData::class);
    }

    // /**
    //  * @return EmailsForData[] Returns an array of EmailsForData objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?EmailsForData
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
