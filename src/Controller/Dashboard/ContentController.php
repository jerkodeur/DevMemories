<?php

namespace App\Controller\Dashboard;

use App\Entity\Content;
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
    public function index(int $page = 1, int $resultByPage = 50): Response
    {
        return $this->render('dashboard/content/home.html.twig', [
            'contents' => $this->contentRepository->findBy([
                // 'user' => $this->getUser()->getId()
            ], ['updated_at' => 'desc'], $resultByPage, $page)
        ]);
    }

    #[Route('/{slug}', name: 'edit')]
    public function edit(Request $request, Content $content): Response
    {
        dd($request);
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
