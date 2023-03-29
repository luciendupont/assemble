<?php

namespace App\Controller;

use App\Repository\HorRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HorController extends AbstractController
{
    #[Route('/hor', name: 'app_hor')]
    public function index(HorRepository $repository): Response
    {
        $hor=$repository->findAll(); 
        return $this->render('hor/index.html.twig', [
            'hors'=>$hor
        ]);
    }
}
