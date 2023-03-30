<?php

namespace App\Controller;

use App\Repository\LiotRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LiotController extends AbstractController
{
    #[Route('/liot', name: 'app_liot')]
    public function index(LiotRepository $repository): Response
    {
        $liot=$repository->findAll();
        return $this->render('liot/index.html.twig', [
            'liots'=>$liot
        ]);
    }
}
