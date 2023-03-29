<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HorController extends AbstractController
{
    #[Route('/hor', name: 'app_hor')]
    public function index(): Response
    {
        return $this->render('hor/index.html.twig', [
            'controller_name' => 'HorController',
        ]);
    }
}
