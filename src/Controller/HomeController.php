<?php

namespace App\Controller;

use App\Repository\NutRepository;
use App\Repository\SquirelRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(SquirelRepository $SquirelRepository, NutRepository $NutRepository): Response
    {
        $nuts = $NutRepository->findAll();
        $squirel = $SquirelRepository->findAll();
        return $this->render('home/index.html.twig', [
            'squirel' => $squirel,
            'nuts' => $nuts,
        ]);
    }
}
