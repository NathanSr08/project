<?php

namespace App\Controller;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\InfoClientRepository;
use App\Repository\FichierClientRepository;
use App\Repository\FichierDemandeRepository;
use App\Entity\FichierClient;
use App\Entity\FichierDemande;
/**
 * @Route("/colab")
 */
class ClientController extends AbstractController
{
    /**
     * @Route("/recap", name="app_tab_recap")
     */
    public function index(Request $request, EntityManagerInterface $entityManager,InfoClientRepository $infoclientrepo,FichierDemandeRepository $fichierdemande,FichierClientRepository $fch): Response
    {
        $user = $this->getUser()->getId();
        $demande = $fichierdemande->findAll();
     

        $client = $infoclientrepo->findBy(
            ['id_adm' => $user]);
            
        return $this->render('client/tab.html.twig', [
            'clients' => $client,
            'fds'=>$demande,
        ]);
    }
    /**
     * @Route("/add_fd" ,name="app_add_fd")
     */
    public function add_fd(Request $request,EntityManagerInterface $entityManager):Response
    {
        $fichier= new FichierDemande;
        if ($request->request->get("test"))
        {
            
          
            $test = $request->request->get("test")["jcp"];
            $fichier->setNom($test);
            if ($fichier->getNom() )
            {
                $entityManager->persist($fichier); //On persiste
                $entityManager->flush(); //On envoie en base
    
               
            }

            return $this->redirectToRoute('app_add_file');      
        }
        else
        {
            return $this->redirectToRoute('app_add_file');    
        }
    }
    /**
     * @Route("/files", name="app_view_allfiles_byuser")
     */
    public function view_files_all(Request $request, EntityManagerInterface $entityManager,FichierDemandeRepository $fichierdemande, InfoClientRepository $infoclient):Response
    {
        $user = $this->getUser()->getId();
        $file_d = $fichierdemande->findAll();
        $cl = $infoclient->findby(['id_adm'=>$user]);
        if ($request->request->get("file"))
        {
                  
            $id_f = $request->request->get("file")["id_demande"];
            
            $id_c = $request->request->get("file")["id_cli"];
            if($id_c=="")
            {
                $file = $this->getDoctrine()->getRepository(FichierClient::class)->view_file_roleuser($id_f,$user);
            }
            else
            {

            
            $file = $this->getDoctrine()->getRepository(FichierClient::class)->view_file_client2($id_f,$id_c,$user);
            }

        }
        else
        {
            $file = $this->getDoctrine()->getRepository(FichierClient::class)->view_file_client1($user);
        }
        

        return $this->render('files/view.html.twig', [
            'clients'=>$file,
            'demandes'=>$file_d,
             'tests'=>$cl,
           
            ]);

    }

    

}
