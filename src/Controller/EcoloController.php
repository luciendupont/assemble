<?php

namespace App\Controller;

use App\Repository\EcoloRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EcoloController extends AbstractController
{
    #[Route('/ecolo', name: 'app_ecolo')]
    public function index(EcoloRepository $repository): Response
    {
        $ecolo=$repository->findAll(); 

        return $this->render('ecolo/index.html.twig', [
            'ecolos'=>$ecolo
        ]);
    }
}
