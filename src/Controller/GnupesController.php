<?php

namespace App\Controller;

use App\Repository\GnupesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GnupesController extends AbstractController
{
    #[Route('/gnupes', name: 'app_gnupes')]
    public function index(GnupesRepository $repository): Response
    {   
        $gnupes=$repository->findAll();
        return $this->render('gnupes/index.html.twig', [
        'gnupess'=>$gnupes
        ]);
    }
}
