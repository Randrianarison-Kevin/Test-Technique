<?php

namespace App\Repository;

use App\Entity\TestTechnique;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TestTechnique>
 *
 * @method TestTechnique|null find($id, $lockMode = null, $lockVersion = null)
 * @method TestTechnique|null findOneBy(array $criteria, array $orderBy = null)
 * @method TestTechnique[]    findAll()
 * @method TestTechnique[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TestTechniqueRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TestTechnique::class);
    }

//    /**
//     * @return TestTechnique[] Returns an array of TestTechnique objects
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

//    public function findOneBySomeField($value): ?TestTechnique
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
