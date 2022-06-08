<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TuestconnecterController extends AbstractController
{
    /**
     * @Route("/tuestconnecter", name="app_tuestconnecter")
     */
    public function index(): Response
    {
        return $this->render('tuestconnecter/index.html.twig', [
            'controller_name' => 'TuestconnecterController',
        ]);
    }
}
