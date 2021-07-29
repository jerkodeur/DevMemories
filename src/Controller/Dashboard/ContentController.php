<?php

namespace App\Controller\Dashboard;

use App\Repository\ContentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/dashboard/contents/', name: 'dashboard_content_')]
class ContentController extends AbstractController
{
    private ContentRepository $contentRepository;
    private EntityManagerInterface $em;

    public function __construct(EntityManagerInterface $em, ContentRepository $contentRepository)
    {
        $this->contentRepository = $contentRepository;
        $this->em = $em;
    }

    #[Route('/content', name: 'home')]
    public function index(): Response
    {
        return $this->render('dashboard/content/home.html.twig', [
            'content' => $this->contentRepository->findAll(),
            'controller_name' => 'ContentController',
        ]);
    }
}
