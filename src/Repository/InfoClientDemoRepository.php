<?php

namespace App\Repository;

use App\Entity\InfoClientDemo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<InfoClientDemo>
 *
 * @method InfoClientDemo|null find($id, $lockMode = null, $lockVersion = null)
 * @method InfoClientDemo|null findOneBy(array $criteria, array $orderBy = null)
 * @method InfoClientDemo[]    findAll()
 * @method InfoClientDemo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InfoClientDemoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InfoClientDemo::class);
    }

    public function add(InfoClientDemo $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(InfoClientDemo $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return InfoClientDemo[] Returns an array of InfoClientDemo objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('i.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?InfoClientDemo
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
