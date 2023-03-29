<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NiController extends AbstractController
{
    #[Route('/ni', name: 'app_ni')]
    public function index(): Response
    {
        return $this->render('ni/index.html.twig', [
            'controller_name' => 'NiController',
        ]);
    }
}
