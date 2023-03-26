<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use App\Entity\InfoClient;
use App\Entity\Admin;
use App\Entity\FichierClient;
use App\Entity\FichierDemande;
use App\Repository\AdminRepository;
use App\Repository\InfoClientRepository;
use App\Repository\FichierDemandeRepository;
use App\Repository\FichierClientRepository;
use App\Form\ClientType;
use App\Form\AddFileType;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Filesystem\Filesystem;



use Doctrine\ORM\EntityManagerInterface;


class SecurityController extends AbstractController
{
    /**
     * @Route("/", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        if ($this->getUser()) {
            return $this->redirectToRoute('app_newclient');
        }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }
    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
    /**
     * @Route("/colab/addclient", name="app_newclient")
     */
    public function add_client(Request $request): Response
    {
        $cli = new InfoClient;
        $user = $this->getUser()->getId();
       
        $form = $this->createForm(ClientType::class,$cli);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid() )
        {
            
            $cli ->setCountFile(0);
            $em=$this->getDoctrine()->getManager();
            $em->persist($cli);
            $em->flush();
            return $this->redirect('/admin/client');
            unset($cli);
            unset($form);
            $cli = new InfoClient;
            $form = $this->createForm(ClientType::class,$cli);


            return $this->render('client/add.html.twig', [
                'message'=>'1',
                'form'=>$form->createView(),
                'ID'=>$user,
                ]);
            }
        return $this->render('client/add.html.twig', [
            'message'=>'0',
            'form'=>$form->createView(),
            'ID'=>$user,
            
            ]);


    }
    /**
     * @Route("/colab/client",name="app_view_client")
     */
    public function View_client():Response
    {
        $user = $this->getUser()->getId();
        $count = $this->getDoctrine()->getRepository(FichierDemande::class)->count_fd();
        // dd($count);
        $clients = $this->getDoctrine()->getRepository(InfoClient::class)->findBy([
            "id_adm" => $user,
            
        ]);
        // dd($clients);
        return $this->render('client/view.html.twig', [
            'clients'=>$clients,
            'ID'=>$user,
            'counts'=>$count,
            
           
            ]);
    }
    /**
     * @Route("/admin/client",name="app_view_clientall")
     */
    public function View_clientall(Request $request, EntityManagerInterface $entityManager,FichierDemandeRepository $fichierdemande):Response
    {
        $user = $this->getUser()->getId();
        $count = $this->getDoctrine()->getRepository(FichierDemande::class)->count_fd();
        $clients = $this->getDoctrine()->getRepository(InfoClient::class)->findAll();
        return $this->render('client/view.html.twig', [
            'clients'=>$clients,
            'ID'=>$user,
            'counts'=>$count,
            
           
            ]);
    }
    /**
     * @Route("/admin/users",name="app_view_users")
     */
    public function View_userall():Response
    {
        $user = $this->getUser()->getId();
        $clients = $this->getDoctrine()->getRepository(Admin::class)->findAll();
        return $this->render('registration/view.html.twig', [
            'clients'=>$clients,
            'ID'=>$user,
           
            ]);
    }
    /**
     * @Route("/admin/searche", name="app_view_file_filtre")
     */
    public function view_files_filtre(Request $request, EntityManagerInterface $entityManager,FichierDemandeRepository $fichierdemande,InfoClientRepository $infoclient):Response
    {
        $file_d = $fichierdemande->findAll();
        $client = $infoclient->findAll();
        if ($request->request->get("file"))
        {
                  
            $id_f = $request->request->get("file")["id_demande"];
            $id_c = $request->request->get("file")["id_cli"];
            if($id_c=="")
            {
                $file = $this->getDoctrine()->getRepository(FichierClient::class)->view_file_info2($id_f);
            }
            else
            {
                $file = $this->getDoctrine()->getRepository(FichierClient::class)->view_file_info3($id_f,$id_c);
            }
           
           
            return $this->render('files/view.html.twig', [
                'clients'=>$file,
                'demandes'=>$file_d,
                'tests'=>$client,
               
               
                ]);
        }
      
        else
        {
            $file = $this->getDoctrine()->getRepository(FichierClient::class)->view_file_info();
            
            return $this->render('files/search.html.twig', [
                'clients'=>$file,
                'demandes'=>$file_d,
                'tests'=>$client,
               
               
                ]);

        }

        

       

    }
    /**
     * @Route("/admin/files", name="app_view_allfiles")
     */
    public function view_files_all(Request $request, EntityManagerInterface $entityManager,FichierDemandeRepository $fichierdemande, InfoClientRepository $infoclient):Response
    {
        $file_d = $fichierdemande->findAll();
        $cl = $infoclient->findAll();
        if ($request->request->get("file"))
        {
                  
            $id_f = $request->request->get("file")["id_demande"];
            
            $id_c = $request->request->get("file")["id_cli"];
            if($id_c=="")
            {
                $file = $this->getDoctrine()->getRepository(FichierClient::class)->view_file_info2($id_f);
            }
            else
            {

            
            $file = $this->getDoctrine()->getRepository(FichierClient::class)->view_file_info3($id_f,$id_c);
            }

        }
        else
        {
            $file = $this->getDoctrine()->getRepository(FichierClient::class)->view_file_info();
        }
        

        return $this->render('files/view.html.twig', [
            'clients'=>$file,
            'demandes'=>$file_d,
             'tests'=>$cl,
           
            ]);

    }
    /**
     * @Route("/files/{id}",name="app_view_files")
     */
    public function view_files($id):Response
    {
        $file = $this->getDoctrine()->getRepository(FichierClient::class)->view_file_by($id);
        return $this->render('files/view_client.html.twig', [
            'clients'=>$file,
           
           
            ]);
    }
     /**
     * @Route("/add_file",name="app_add_file")
     */
    public function add_file(Request $request, EntityManagerInterface $entityManager,InfoClientRepository $infoclientrepo,FichierDemandeRepository $fichierdemande,FichierClientRepository $fc):Response
    {
        $file = new FichierClient;
        $filename = 'salut';
        $user = $this->getUser()->getId();
        if($user==1)
        {
            $client = $infoclientrepo->findAll();
           
        }
        else
        {
            $client = $infoclientrepo->findBy(
                ['id_adm' => $user]);
           
        }
        $message=0;
      
        $demande = $fichierdemande->findAll();
        if ($request->request->get("file"))
        {
            $file->setDateFichier(new \DateTime());         
            $file->setIdCli($request->request->get("file")["id_client"]); //On modifie l'id secteur        
            $file->setIdDemande($request->request->get("file")["id_demande"]);
            $filetest = $request->files->get("file_name"); 
            $cat = $request->request->get("file")["id_demande"];
            $infoclientrepo->ajout_1($request->request->get("file")["id_client"]);
            $filename = $filetest->getClientOriginalName();
            $text="Un nouveaux fichier a été rajouer. Fichier: ".$filename." Catégorie: ".$cat;
            $fc->sendtelegram($text);
            $extension = $filetest->getMimeType() ;
            if($extension!="application/pdf")
            {
                $message =1;
                return $this->redirectToRoute('app_add_file');
            }
            else
            {
                $message=0;
            }
            $file->setNomFichier($filename);
            $paths = $this->getParameter('uploads_directory');
          
            $name_unique = md5(uniqid()).'.pdf';
            $file->setNameMd5($name_unique);
            $file->setPath($paths.$name_unique);
            $filetest->move($paths,$name_unique);

          
     

            
        }
        if ($file->getIdCli() && $file->getIdDemande())
        {
            $entityManager->persist($file); //On persiste
            $entityManager->flush(); //On envoie en base

            return $this->redirectToRoute('app_view_allfiles_byuser', [], Response::HTTP_SEE_OTHER);
        }
        return $this->render('files/add.html.twig',
            [
           'clients' => $client, //Affichage
           'demandes' => $demande,
           'non'=>$filename,
           'message'=>$message,
           
         
            
            ]
        );
       

        return $this->render('files/add.html.twig', [
            'message'=>'0',
            'form'=>$form->createView(),
            'message'=>$message,
            
            ]);
    }
     /**
     * @Route("/viewpdf/{name}",name="app_view_pdf")
     */
    public function view_pdf($name)
    {
        $projectRoot = $this->getParameter('kernel.project_dir');
        $filename = $name;
       
        return $this->file($projectRoot.'/public/Uploads/'.$filename, null, ResponseHeaderBag::DISPOSITION_INLINE);

    }
         /**
     * @Route("/delete_file/{id}",name="app_delete_file")
     */
    // public function delete_file($name)
    // {

    //     $projectRoot = $this->getParameter('uploads_directory');
    //     $filename = $name;
    //     $em = $this->getDoctrine()->getRepository(FichierClient::class);
    //     $test = $em->findby(['name_md5'=>$filename]);
    //     $remove = $em->remove($test);
    //     $em->flush();
    //     // unlink($projectRoot.'/'.$filename);
    //     return $this->redirectToRoute('app_view_client', [], Response::HTTP_SEE_OTHER);
       
        

    // }
    public function suppfile(FichierClient $file,InfoClientRepository $infoclientrepo): Response
    {
        $test = $this->getDoctrine()->getRepository(FichierDemande::class)->view_one_file($file->getId());
        $m = $test[0]["id_cli"];
        $t = $infoclientrepo->enleve_1($m);
      
        $projectRoot = $this->getParameter('uploads_directory');
        $infoclientrepo->enleve_1($file);
        $filename =   $file->getNameMd5();
       
        $em = $this->getDoctrine()->getManager();
        $em ->remove($file);
        $em->flush();
        unlink($projectRoot.'/'.$filename);
        
        
        return $this->redirectToRoute('app_view_client');
    }

     /**
     * @Route("/editclient/{id}",name="app_edit_client")
     */
    public function edit_client(Request $request,$id):Response
    {
        $message=4;
        $user = $this->getUser()->getId();
        $client = $this->getDoctrine()->getManager()->getRepository(InfoClient::class)->find($id);
    
        $form = $this->createForm(ClientType::class,$client);
        
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid() )
        {
           
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirect('/colab/client');
        }

        return $this->render('client/edit.html.twig', [
            'cli'=>$client,
            'form'=>$form->createView(),
            'message'=>$message,
            'ID'=>$user,
            ]);
    }

}
