<?php

namespace App\Controller;

use App\Repository\LfiRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LfiController extends AbstractController
{
    #[Route('/lfi', name: 'app_lfi')]
    public function index(LfiRepository $repository): Response
    {
        $lfi=$repository->findAll();
        return $this->render('lfi/index.html.twig', [
            'controller_name' => 'LfiController',
        'lfis'=>$lfi
        ]);
    }
}
