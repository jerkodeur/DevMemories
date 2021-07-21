<?php

namespace App\Controller;

use App\Repository\ColorRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/dashboard/colors', name: 'dashboard_colors_')]
class ColorController extends AbstractController
{
    #[Route('/', name: 'list')]
    public function index(ColorRepository $colorRepository): Response
    {
        return $this->render('dashboard/color/list.html.twig', [
            'colors' => $colorRepository->findAll()
        ]);
    }
}
