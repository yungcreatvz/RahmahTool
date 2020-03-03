<?php

namespace App\Repository;

use App\Entity\CM2;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method CM2|null find($id, $lockMode = null, $lockVersion = null)
 * @method CM2|null findOneBy(array $criteria, array $orderBy = null)
 * @method CM2[]    findAll()
 * @method CM2[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CM2Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CM2::class);
    }

    // /**
    //  * @return CM2[] Returns an array of CM2 objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CM2
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
