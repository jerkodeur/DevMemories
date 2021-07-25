<?php

namespace App\Controller\Dashboard;

use App\Entity\Color;
use App\Entity\Category;
use App\Form\ColorsType;
use App\Form\CategoryType;
use App\Repository\ColorRepository;
use App\Repository\CategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('dashboard/categories', name: 'dashboard_categories_')]
class CategoryController extends AbstractController
{
    private ValidatorInterface $validator;
    private EntityManagerInterface $em;
    private ColorRepository $colorRepository;
    private CategoryRepository $categoryRepository;

    public function __construct(EntityManagerInterface $em, CategoryRepository $categoryRepository, ColorRepository $colorRepository, ValidatorInterface $validator)
    {
        $this->em = $em;
        $this->colorRepository = $colorRepository;
        $this->categoryRepository = $categoryRepository;
        $this->validator = $validator;
    }

    #[Route('/', name: 'list')]
    public function index(Request $request): Response
    {
        $color = new Color();
        $category = new Category();
        $color_form = $this->createForm(ColorsType::class, $color);
        $color_form_2 = $this->createForm(ColorsType::class, $color);
        $category_form = $this->createForm(CategoryType::class, $category, [
            'action' => $this->generateUrl('dashboard_categories_new')
        ]);

        return $this->render('dashboard/category/list.html.twig', [
            'categories' => $this->categoryRepository->findUserParentCategories($this->getUser()->getId()),
            'colors' => $this->colorRepository->findBy(['user' => $this->getUser()]),
            'color_form' => $color_form->createView(),
            'color_form_2' => $color_form_2->createView(),
            'category_form' => $category_form->createView()
        ]);
    }

    #[Route('/new', name: 'new')]
    public function new(Request $request)
    {
        $category = new Category();

        $category_form = $this->createForm(CategoryType::class, $category);
        $category_form->handleRequest($request);
        $params = $request->get('category');
        if (
            $exist = $this->categoryRepository->findOneBy([
                'label' => $params['label'],
                'parent' => $params['parent'],
                'user' => $this->getUser()->getId()
            ])
        ) {
            $this->addFlash(
                'error',
                'La catégorie<b> ' . $params['label'] . ' </b>est déjà associé à la catégorie parente<b> ' . $exist->getParent()->getLabel() . ' </b>!'
            );
            return $this->redirectToRoute('dashboard_categories_list');
        }

        if ($category_form->isSubmitted() && $category_form->isValid()) {

            if (!$params['color']) {
                if (
                    $this->colorRepository->findOneBy([
                        'code_bg' => $params['bgColorPicker'],
                        'code_text' => $params['textColorPicker'],
                        'user' => $this->getUser()->getId()
                    ])
                ) {
                    $this->addFlash(
                        'error',
                        'La couleur est déjà exitante en base de donnée'
                    );
                    return $this->redirectToRoute('dashboard_categories_list');
                }
                if (!$params['textColorPicker'] || !$params['bgColorPicker']) {
                    $this->addFlash(
                        'error',
                        'la couleur de catégorie n\'a pas été renseignée'
                    );
                    return $this->redirectToRoute('dashboard_categories_list');
                }

                $color = new Color();

                $color->setCodeBg($params['bgColorPicker']);
                $color->setCodeText($params['textColorPicker']);
                $color->setUser($this->getUser());
                $errors = $this->validator->validate($color);

                if (count($errors) > 0) {
                    foreach ($errors as $error) {
                        $this->addFlash(
                            'error',
                            $error->getMessage()
                        );
                    }
                    return $this->redirectToRoute('dashboard_categories_list');
                }

                $this->em->persist($color);
                $this->em->flush();

                $colorId = $this->colorRepository->findOneBy([
                    'code_bg' => $params['bgColorPicker'],
                    'code_text' => $params['textColorPicker'],
                    'user' => $this->getUser()->getId()
                ]);

                $category->setColor($colorId);
            }

            $category->setUser($this->getUser());
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($category);
            $entityManager->flush();
            $this->addFlash('success', 'Ca marche');
        }

        return $this->redirectToRoute('dashboard_categories_list');
    }
}
