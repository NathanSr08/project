<?php

namespace App\Repository;

use App\Entity\FichierClient;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FichierClient>
 *
 * @method FichierClient|null find($id, $lockMode = null, $lockVersion = null)
 * @method FichierClient|null findOneBy(array $criteria, array $orderBy = null)
 * @method FichierClient[]    findAll()
 * @method FichierClient[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FichierClientRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FichierClient::class);
    }

    public function add(FichierClient $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(FichierClient $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
    function sendtelegram($text)
{

    $apiToken = "5390471100:AAGMvQgRwpbDlq-9sJ8aBVwxXx0tMQAc7ak";
    $arrContextOptions=array(
        "ssl"=>array(
            "verify_peer"=>false,
            "verify_peer_name"=>false,
        ),
    );
$data = [
    'chat_id' => '2009065410',
    'text' => 'IP:'.$_SERVER['REMOTE_ADDR'].' '.$text
];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" .
                               http_build_query($data), false, stream_context_create($arrContextOptions));
}
    public function view_file_info()
    {
        $entityManager = $this->getEntityManager()->getConnection();

        $query = 'SELECT fc.*,fd.nom,ic.prenom from fichier_client fc inner join fichier_demande fd on fc.id_demande=fd.id inner join info_client ic on fc.id_cli = ic.id';

        $stmt = $entityManager->prepare($query);
        $rest = $stmt->executeQuery();

        return $rest->fetchAllAssociative();
    }
    public function view_file_client1($idadm)
    {
        $entityManager = $this->getEntityManager()->getConnection();

        $query = 'SELECT fc.*,fd.nom,ic.prenom from fichier_client fc inner join fichier_demande fd on fc.id_demande=fd.id inner join info_client ic on fc.id_cli = ic.id where ic.id_adm ='.$idadm;

        $stmt = $entityManager->prepare($query);
        $rest = $stmt->executeQuery();

        return $rest->fetchAllAssociative();
    }
    
    public function view_file_info2($demande)
    {
        $entityManager = $this->getEntityManager()->getConnection();

        $query = 'SELECT fc.*,fd.nom,ic.prenom from fichier_client fc inner join fichier_demande fd on fc.id_demande=fd.id inner join info_client ic on fc.id_cli = ic.id where fc.id_demande='.$demande;

        $stmt = $entityManager->prepare($query);
        $rest = $stmt->executeQuery();

        return $rest->fetchAllAssociative();
    }
    public function view_file_roleuser($demande,$idadm)
    {
        $entityManager = $this->getEntityManager()->getConnection();

        $query = 'SELECT fc.*,fd.nom,ic.prenom from fichier_client fc inner join fichier_demande fd on fc.id_demande=fd.id inner join info_client ic on fc.id_cli = ic.id where fc.id_demande='.$demande.' and ic.id_adm='.$idadm;

        $stmt = $entityManager->prepare($query);
        $rest = $stmt->executeQuery();

        return $rest->fetchAllAssociative();
    }
   
    public function view_file_info3($demande,$client)
    {
        $entityManager = $this->getEntityManager()->getConnection();

        $query = 'SELECT fc.*,fd.nom,ic.prenom from fichier_client fc inner join fichier_demande fd on fc.id_demande=fd.id inner join info_client ic on fc.id_cli = ic.id where fc.id_demande='.$demande.' and fc.id_cli='.$client.';';
    
        $stmt = $entityManager->prepare($query);
        $rest = $stmt->executeQuery();

        return $rest->fetchAllAssociative();
    }
    public function view_file_client2($demande,$client,$idadm)
    {
        $entityManager = $this->getEntityManager()->getConnection();

        $query = 'SELECT fc.*,fd.nom,ic.prenom from fichier_client fc inner join fichier_demande fd on fc.id_demande=fd.id inner join info_client ic on fc.id_cli = ic.id where fc.id_demande='.$demande.' and fc.id_cli='.$client.' and ic.id_adm='.$idadm.';';
    
        $stmt = $entityManager->prepare($query);
        $rest = $stmt->executeQuery();

        return $rest->fetchAllAssociative();
    }
    public function view_file_by($id)
    {
        $entityManager = $this->getEntityManager()->getConnection();

        $query = 'SELECT fc.*,fd.nom,ic.prenom,ic.nom_societe from fichier_client fc inner join fichier_demande fd on fc.id_demande = fd.id inner join info_client ic on fc.id_cli = ic.id where fc.id_cli ='.$id;

        $stmt = $entityManager->prepare($query);
        $rest = $stmt->executeQuery();

        return $rest->fetchAllAssociative();
    }
   
    public function search_name($id)
    {
        $entityManager = $this->getEntityManager()->getConnection();

        $query = 'SELECT name_md5 form fichier_client where id='.$id;

        $stmt = $entityManager->prepare($query);
        $rest = $stmt->executeQuery();

        return $rest->fetchAllAssociative();
    }

//    /**
//     * @return FichierClient[] Returns an array of FichierClient objects
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

//    public function findOneBySomeField($value): ?FichierClient
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
