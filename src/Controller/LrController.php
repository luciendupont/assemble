<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LrController extends AbstractController
{
    #[Route('/lr', name: 'app_lr')]
    public function index(): Response
    {
        return $this->render('lr/index.html.twig', [
            'controller_name' => 'LrController',
        ]);
    }
}
