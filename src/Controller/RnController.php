<?php

namespace App\Controller;

use App\Repository\RnRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RnController extends AbstractController
{
    #[Route('/rn', name: 'app_rn')]
    public function index(RnRepository $repository): Response
    {
        $rn=$repository->findAll();
        return $this->render('rn/index.html.twig', [
           'rns'=>$rn     
        ]);
    }
}
