<?php

namespace App\Controller;

use App\Repository\NiRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NiController extends AbstractController
{
    #[Route('/ni', name: 'app_ni')]
    public function index(NiRepository $repository): Response
    {
        $ni=$repository->findAll();
        return $this->render('ni/index.html.twig', [
        'nis'=>$ni
        ]);
    }
}
