<?php

namespace App\Controller\Dashboard;

use App\Entity\Category;
use App\Entity\Color;
use App\Form\CategoryType;
use App\Form\ColorType;
use App\Repository\CategoryRepository;
use App\Repository\ColorRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('dashboard/categories', name: 'dashboard_categories_')]
class CategoryController extends AbstractController
{
    #[Route('/', name: 'list')]
    public function index(CategoryRepository $categoryRepository, ColorRepository $colorRepository): Response
    {
        // $color = new Color();
        $category = new Category();
        // $color_form = $this->createForm(ColorType::class, $color);
        $category_form = $this->createForm(CategoryType::class, $category);

        return $this->render('dashboard/category/list.html.twig', [
            'categories' => $categoryRepository->findUserParentCategories($this->getUser()->getId()),
            'colors' => $colorRepository->findAll(),
            // 'color_form' => $color_form->createView(),
            'category_form' => $category_form->createView()
        ]);
    }
}
