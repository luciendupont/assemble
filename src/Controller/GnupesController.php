<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GnupesController extends AbstractController
{
    #[Route('/gnupes', name: 'app_gnupes')]
    public function index(): Response
    {
        return $this->render('gnupes/index.html.twig', [
            'controller_name' => 'GnupesController',
        ]);
    }
}
