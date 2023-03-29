<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RenController extends AbstractController
{
    #[Route('/ren', name: 'app_ren')]
    public function index(): Response
    {
        return $this->render('ren/index.html.twig', [
            'controller_name' => 'RenController',
        ]);
    }
}
