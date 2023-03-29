<?php

namespace App\Controller;

use App\Entity\Modem;
use App\Repository\ModemRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ModemController extends AbstractController
{
    #[Route('/modem', name: 'app_modem')]
    public function index(ModemRepository $repository): Response
    {
       $modem=$repository->findAll(); 
        return $this->render('modem/index.html.twig', [
        'modems'=>$modem
        
    ]);






    }
}
