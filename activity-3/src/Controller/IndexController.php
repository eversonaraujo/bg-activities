<?php

namespace App\Controller;

use App\Entity\Links;
use App\Repository\LinksRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;

class IndexController extends AbstractController
{
    #[Route('', name: 'homepage', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('index/index.html.twig');
    }
    
    #[Route('/access/{hash}', name: 'asdasd', methods: ['GET'])]
    public function access(EntityManagerInterface $em, $hash): Response
    {   
        $repo = $em->getRepository(Links::class);

        /** @var Links $link */
        if ($link = $repo->findOneBy(['shortlink' => $hash])) {
            $link->addVisit();
            $em->flush();

            return new RedirectResponse($link->getUrl());
        }

        throw $this->createNotFoundException('Ops, link not found!');
    }
    
    #[Route('/most-accessed', name: 'most-accesseds', methods: ['GET'])]
    public function mostAccessed(LinksRepository $repo): Response
    {   
        return $this->json($repo->mostAccesseds());
    }
}