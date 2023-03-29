<?php

namespace App\Controller;

use App\Repository\LrRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LrController extends AbstractController
{
    #[Route('/lr', name: 'app_lr')]
    public function index(LrRepository $repository): Response
    {
        $lr=$repository->findAll();
 
        return $this->render('lr/index.html.twig', [
        'lrs'=>$lr
    ]);
    }
}
