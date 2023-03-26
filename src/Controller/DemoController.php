<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\DemoType;
use App\Entity\Demo;
class DemoController extends AbstractController
{
    #[Route('/demo', name: 'app_demo')]
    public function index(Request $request): Response
    {
        $cli = new Demo;
        $form = $this->createForm(DemoType::class,$cli);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid() )
        {
            $em=$this->getDoctrine()->getManager();
            $em->persist($cli);
            $em->flush();
            return $this->redirect('/');
        }
        return $this->render('demo/index.html.twig', [
            'controller_name' => 'DemoController',
            'form' =>$form->createView(),
        ]);
    }
}
