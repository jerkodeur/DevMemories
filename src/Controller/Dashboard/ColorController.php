<?php

namespace App\Controller\Dashboard;

use App\Repository\ColorRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/dashboard/resources/colors', name: 'dashboard_resources_colors_')]
class ColorController extends AbstractController
{
    #[Route('/', name: 'list')]
    public function index(ColorRepository $colorRepository): Response
    {
        return $this->render('dashboard/color/list.html.twig', [
            'colors' => $colorRepository->findAll()
        ]);
    }

    #[Route('/add', name: 'add')]
    public function add(ColorRepository $colorRepository, Request $request): Response
    {
        dd($request);
    }
}
