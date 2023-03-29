<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RnController extends AbstractController
{
    #[Route('/rn', name: 'app_rn')]
    public function index(): Response
    {
        return $this->render('rn/index.html.twig', [
            'controller_name' => 'RnController',
        ]);
    }
}
