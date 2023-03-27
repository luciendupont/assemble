<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Homecontroller extends AbstractController
{
    #[Route('/','assemble.index', methods:['GET']) ]
   public function index():Response
   {
    return $this->render('assemble.html.twig');
   }
}