<?php

namespace App\Controller;

use App\Repository\SquirelRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(SquirelRepository $SquirelRepository): Response
    {
        $squirel = $SquirelRepository->findAll();
        return $this->render('home/index.html.twig', [
            'squirel' => $squirel
        ]);
    }
}
