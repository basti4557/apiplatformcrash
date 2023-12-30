<?php

namespace App\Repository;

use App\Entity\Bottles;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Bottles>
 *
 * @method Bottles|null find($id, $lockMode = null, $lockVersion = null)
 * @method Bottles|null findOneBy(array $criteria, array $orderBy = null)
 * @method Bottles[]    findAll()
 * @method Bottles[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BottlesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Bottles::class);
    }

//    /**
//     * @return Bottles[] Returns an array of Bottles objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('b.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Bottles
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
