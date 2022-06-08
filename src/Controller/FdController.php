<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\FichierDemande;
/**
 * @Route("admin")
 */
class FdController extends AbstractController
{
    /**
     * @Route("/view_fd", name="app_view_fd")
     */
    public function View_client():Response
    {
       
      
        $clients = $this->getDoctrine()->getRepository(FichierDemande::class)->findAll();
        return $this->render('fd/index.html.twig', [
            'fds'=>$clients,
          
            
           
            ]);
    }
    /**
     * @Route("/del_fd/{id}", name="app_del_fd")
     */
    public function Dell_fd(FichierDemande $fd):Response
    {
        $em = $this->getDoctrine()->getManager();
        $em ->remove($fd);
        $em->flush();
      
        return $this->redirectToRoute('app_view_fd');
            
           
           
    }
}
