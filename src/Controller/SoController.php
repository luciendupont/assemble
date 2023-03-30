<?php

namespace App\Controller;

use App\Repository\SoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SoController extends AbstractController
{
    #[Route('/so', name: 'app_so')]
    public function index(SoRepository $repository): Response
    {
        $so=$repository->findAll();
        return $this->render('so/index.html.twig', [
            'controller_name' => 'SoController',
        'sos'=>$so
        ]);
    }
}
