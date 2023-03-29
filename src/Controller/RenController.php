<?php

namespace App\Controller;

use App\Repository\RenRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RenController extends AbstractController
{
    #[Route('/ren', name: 'app_ren')]
    public function index(RenRepository $repository): Response
    {      $ren=$repository->findAll();
        return $this->render('ren/index.html.twig', [
        'rens'=>$ren
        ]);

    }
}
