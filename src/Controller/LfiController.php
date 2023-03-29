<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LfiController extends AbstractController
{
    #[Route('/lfi', name: 'app_lfi')]
    public function index(): Response
    {
        return $this->render('lfi/index.html.twig', [
            'controller_name' => 'LfiController',
        ]);
    }
}
