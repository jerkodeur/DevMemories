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

#[Route('dashboard/categories', name: 'dashboard_category_')]
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

        $color_new_form = $this->get('form.factory')->createNamed('color_new_form', ColorsType::class, $color);
        $color_edit_form = $this->get('form.factory')->createNamed('color_edit_form', ColorsType::class, $color);
        $category_form = $this->createForm(CategoryType::class, $category);

        $color_new_form->handleRequest($request);
        $color_edit_form->handleRequest($request);
        $category_form->handleRequest($request);

        if ($category_form->isSubmitted() && $category_form->isValid()) {
            $this->handleCategoryRequest($request, $category);

            if (!$this->get('session')->getFlashBag()->peek('error', [])) {
                return $this->redirect($this->generateUrl('dashboard_category_list'));
            } else {
                $this->redirectToRoute('dashboard_category_list');
            }
        }

        if ($color_new_form->isSubmitted() && $color_new_form->isValid()) {

            $this->handleNewColorRequest($request, $color);

            if (!$this->get('session')->getFlashBag()->peek('error', [])) {
                return $this->redirect($this->generateUrl('dashboard_category_list'));
            } else {
                $this->redirectToRoute('dashboard_category_list');
            }
        }

        if ($color_edit_form->isSubmitted() && $color_edit_form->isValid()) {

            $color = $this->colorRepository->find($request->get('color_id'));
            $color->setCodeBg($request->get('color_edit_form')['code_bg']);
            $color->setCodeText($request->get('color_edit_form')['code_text']);

            $this->em->persist($color);
            $this->em->flush();

            $this->addFlash('success', 'La couleur a été modifiée avec succès !');
        }

        return $this->render('dashboard/category/list.html.twig', [
            'categories' => $this->categoryRepository->findUserParentCategories($this->getUser()->getId()),
            'colors' => $this->colorRepository->findBy(['user' => $this->getUser()]),
            'color_new_form' => $color_new_form->createView(),
            'color_edit_form' => $color_edit_form->createView(),
            'category_form' => $category_form->createView()
        ]);
    }

    /**
     * Handle the category request
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \App\Entity\Category $category
     */
    public function handleCategoryRequest(Request $request, Category $category)
    {

        if ($this->verifyIfCategoryRelationExist($request)) return;

        // handle the category color
        if (!$request->get('category')['color']) {

            $this->verifyIfCategoryColorExist($request, $category);

            if (!$category->getColor()) {
                $color = new Color;
                $color->setCodeBg($request->get('category')['bgColorPicker']);
                $color->setCodeText($request->get('category')['textColorPicker']);
                $color->setUser($this->getUser());

                if ($this->validateColor($color)) return;

                $this->em->persist($color);
                $this->em->flush();

                // Get id of the new color
                $color = $this->colorRepository->findOneBy([
                    'code_bg' => $request->get('category')['bgColorPicker'],
                    'code_text' => $request->get('category')['textColorPicker'],
                    'user' => $this->getUser()->getId()
                ]);

                $category->setColor($color);
            }
        }

        $category->setUser($this->getUser());
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($category);
        $entityManager->flush();

        if (!$this->get('session')->getFlashBag()->peek('error', [])) {
            return $this->addFlash('success', 'La nouvelle catégorie a bien été ajoutée');
        } else {
            return $this->addFlash('error', 'Des erreurs ont été rencontrées');
        }
    }

    /**
     * Handle the color request
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \App\Entity\Color $color
     */
    public function handleNewColorRequest(Request $request, Color $color)
    {

        if ($this->verifyIfColorExist($request, $color)) return;
        if ($this->validateColor($color)) return;

        $color->setUser($this->getUser());

        $this->em->persist($color);
        $this->em->flush();

        $this->addFlash('success', 'La nouvelle couleur a été créee !');
    }

    /**
     * Verify if the subCategory isn't already bound to the defined parent
     * and if unique if no parent bonud
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     */
    public function verifyIfCategoryRelationExist(Request $request)
    {
        if (
            $exist = $this->categoryRepository->findOneBy([
                'label' => $request->get('category')['label'],
                'parent' => $request->get('category')['parent'],
                'user' => $this->getUser()->getId()
            ])
        ) {
            $this->addFlash(
                'error',
                'La catégorie<b> ' . $request->get('category')['label'] . ' </b>est déjà associée à la catégorie parente<b> ' . $exist->getParent()->getLabel() . ' </b>!'
            );
        }

        if (
            !$request->get('category')['parent'] &&
            $exist = $this->categoryRepository->findByParentCategories(
                $this->getUser()->getId(),
                $request->get('category')['label']
            )
        ) {
            $this->addFlash(
                'error',
                'La catégorie<b> ' . $request->get('category')['label'] . ' </b>est déjà existante !'
            );
        }
        return $exist;
    }

    /**
     * Define color to the category if already present in database
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \App\Entity\Category $category
     */
    public function verifyIfCategoryColorExist(Request $request, Category $category): self
    {
        if (
            $exist = $this->colorRepository->findOneBy([
                'code_bg' => $request->get('category')['bgColorPicker'],
                'code_text' => $request->get('category')['textColorPicker'],
                'user' => $this->getUser()->getId()
            ])
        ) {
            $category->setColor($exist);
        }
        return $this;
    }

    /**
     * Control if the color already exist
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \App\Entity\Category $category
     */
    public function verifyIfColorExist(Request $request)
    {
        if (
            $exist = $this->colorRepository->findOneBy([
                'code_bg' => $request->get('color_new_form')['code_text'],
                'code_text' => $request->get('color_new_form')['code_bg'],
                'user' => $this->getUser()->getId()
            ])
        ) {
            $this->addFlash(
                'error',
                'Une couleur correspondant aux codes couleurs renseignés existe déjà !'
            );

            return $exist;
        }
    }

    /**
     * Check the code color with constraints
     *
     * @param \App\Entity\Color $color
     */
    public function validateColor(Color $color)
    {
        $errors = $this->validator->validate($color);

        if (count($errors) > 0) {
            foreach ($errors as $error) {
                $this->addFlash(
                    'error',
                    $error->getMessage()
                );
            }
            return $errors;
        }
    }

    #[Route('/edit/{id<\d+>}', name: 'edit')]
    public function edit(Request $request, Category $category): Response
    {
        dd($request);
        // $this->getDoctrine()->getManager()->remove($category);
        // $this->getDoctrine()->getManager()->flush();

        // $this->addFlash('success', 'La catégorie a été supprimée avec succès !');

        return $this->redirectToRoute('dashboard_category_list');
    }

    #[Route('/delete/{id<\d+>}', name: 'delete')]
    public function delete(Category $category): Response
    {
        $this->getDoctrine()->getManager()->remove($category);
        $this->getDoctrine()->getManager()->flush();

        $this->addFlash('success', 'La catégorie a été supprimée avec succès !');

        return $this->redirectToRoute('dashboard_category_list');
    }
}
