<?php

namespace App\Repository;

use App\Entity\FichierDemande;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FichierDemande>
 *
 * @method FichierDemande|null find($id, $lockMode = null, $lockVersion = null)
 * @method FichierDemande|null findOneBy(array $criteria, array $orderBy = null)
 * @method FichierDemande[]    findAll()
 * @method FichierDemande[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FichierDemandeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FichierDemande::class);
    }

    public function add(FichierDemande $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(FichierDemande $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
    public function getNombyid_fd($id)
    {
        $entityManager = $this->getEntityManager()->getConnection();

        $query = 'SELECT nom from fichier_demande where id ='.$id;

        $stmt = $entityManager->prepare($query);
        $rest = $stmt->executeQuery();

        return $rest->fetchAllAssociative();
    }
    public function count_fd()
    {
        $entityManager = $this->getEntityManager()->getConnection();

        $query = 'SELECT COUNT(nom) from fichier_demande';

        $stmt = $entityManager->prepare($query);
        $rest = $stmt->executeQuery();

        return $rest->fetchAllAssociative();
    }
    public function count_fd_by_user($id)
    {
        $entityManager = $this->getEntityManager()->getConnection();

        $query = 'SELECT COUNT(path) from fichier_client where id_cli = '.$id;

        $stmt = $entityManager->prepare($query);
        $rest = $stmt->executeQuery();

        return $rest->fetchAllAssociative();
    }
    public function view_one_file($id)
    {
        $entityManager = $this->getEntityManager()->getConnection();

        $query = 'SELECT * from fichier_client where id='.$id;

        $stmt = $entityManager->prepare($query);
        $rest = $stmt->executeQuery();

        return $rest->fetchAllAssociative();
    }

//    /**
//     * @return FichierDemande[] Returns an array of FichierDemande objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('f.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?FichierDemande
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }



    
}
