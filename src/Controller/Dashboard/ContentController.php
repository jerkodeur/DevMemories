<?php

namespace App\Controller\Dashboard;

use App\Entity\Content;
use App\Form\ContentType;
use App\Repository\ContentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/dashboard/contents', name: 'dashboard_content_')]
class ContentController extends AbstractController
{
    private ContentRepository $contentRepository;
    private EntityManagerInterface $em;

    public function __construct(EntityManagerInterface $em, ContentRepository $contentRepository)
    {
        $this->contentRepository = $contentRepository;
        $this->em = $em;
    }

    #[Route('/', name: 'list')]
    public function index(): Response
    {
        return $this->render('dashboard/content/home.html.twig', [
            'contents' => $this->contentRepository->findBy([
                'user' => $this->getUser()->getId()
            ], ['updated_at' => 'asc'])
        ]);
    }

    #[Route('/new', name: 'new')]
    public function new(Request $request): Response
    {
        $content = new Content();
        $form = $this->createForm(ContentType::class, $content);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $content->setUser($this->getUser());
            $this->em->persist($content);

            $this->em->flush();
            $this->addFlash('success', 'Un nouveau contenu a bien été ajouté !');

            return $this->redirectToRoute('dashboard_content_list');
        }

        return $this->render('dashboard/content/new.html.twig', [
            'form' => $form->createView()
        ]);

    }

    #[Route('/edit/{slug}', name: 'edit')]
    public function edit(Request $request, Content $content): Response
    {
        $form = $this->createForm(ContentType::class, $content);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $this->em->persist($content);
            $this->em->flush();

            $this->addFlash('success', "La catégorie" . $content->getTitle() . "a bien été modifiée ");

            return $this->redirectToRoute('dashboard_content_list');
        }

        return $this->render('dashboard/content/edit.html.twig', [
            'form' => $form->createView()
        ]);

    }


    #[Route('/switchPrivate/{id<[0-9]*>}', name: 'switchPrivate')]
    public function switchPrivate(Content $content): Response
    {
        $content->setPrivate(!$content->getPrivate());
        $this->em->persist($content);
        $this->em->flush();

        return new response();
    }

    #[Route('/switchPublished/{id<[0-9]*>}', name: 'switchPublished')]
    public function switchPublished(Content $content): Response
    {
        $content->setPublished(!$content->getPublished());
        $this->em->persist($content);
        $this->em->flush();

        return new response();
    }

    #[Route('/delete/{slug}', name: 'delete')]
    public function delete(Content $content): Response
    {
        $this->em->remove($content);
        $this->em->flush();

        $this->addFlash('success', 'Le contenu a été supprimé avec succès');

        return $this->redirectToRoute('dashboard_content_list');

    }
}
