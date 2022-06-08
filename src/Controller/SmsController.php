<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\MessageRepository;
use App\Repository\AdminRepository;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Message;
use App\Entity\Admin;

class SmsController extends AbstractController
{
    /**
     * @Route("/colab/sms_send", name="app_sms")
     */
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $sms = new Message;
        $clients = $this->getDoctrine()->getRepository(Admin::class)->findAll();
        $user = $this->getUser()->getId();
        if ($request->request->get("sms"))
        {
            $sms->setSubject($request->request->get("sms")["sujet"]);
            // $test = $request->request->get("sms")["a"];
            $sms->setIdDest($request->request->get("sms")["a"]);
            $sms->setSms($request->request->get("sms")["sms"]);
            $sms->setIdEnvoyeur($user);
            date_default_timezone_set('Europe/Paris');
            $date = date('d-m-y h:i:s');
            $sms->setDate($date);
            $entityManager->persist($sms); //On persiste
            $entityManager->flush(); //On envoie en base
            return $this->redirectToRoute('app_sms_view');

        }
        else
        {
            return $this->render('sms/index.html.twig', [
                'controller_name' => 'SmsController',
                
                'users'=>$clients
            ]);
        }

        
    }
     /**
     * @Route("/colab/sms", name="app_sms_view")
     */
    public function view(Request $request, EntityManagerInterface $entityManager,MessageRepository $mr): Response
    {
       $user = $this->getUser()->getId();
       $sms = $mr->view_last_sms($user);
       return $this->render('sms/view.html.twig', [
        'smss' => $sms,
    ]);

    }
}
