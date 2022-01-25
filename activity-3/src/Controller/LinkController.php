<?php

namespace App\Controller;

use App\Entity\Links;
use App\Form\LinksType;
use App\Repository\LinksRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class LinkController extends AbstractController
{
    #[Route('/short', name: 'links_index', methods: ['GET'])]
    public function index (LinksRepository $repository): Response
    {
        return $this->json($repository->findAll());
    }

    #[Route('/short', name: 'links_create', methods: ['POST'])]
    public function save (Request $request, EntityManagerInterface $entityManager): Response
    {
        $link = new Links();
        $form = $this->createForm(LinksType::class, $link);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($link);
            $entityManager->flush();

            return new JsonResponse($link, Response::HTTP_CREATED);
        }

        return new JsonResponse($form->getErrors(true), Response::HTTP_BAD_REQUEST);
    }

    #[Route('/links/{id}', name: 'links_find', methods: ['GET'])]
    public function find (Links $link): Response
    {
        return new JsonResponse($link);
    }

    #[Route('/links/{id}', name: 'links_update', methods: ['UPDATE'])]
    public function edit(Request $request, Links $link, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(LinksType::class, $link);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            return new JsonResponse($link);
        }

        return new JsonResponse($form->getErrors(true), Response::HTTP_BAD_REQUEST);
    }

    #[Route('/links/{id}', name: 'links_delete', methods: ['DELETE'])]
    public function delete(Request $request, Links $link, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$link->getId(), $request->request->get('_token'))) {
            $entityManager->remove($link);
            $entityManager->flush();
        }

        return new JsonResponse('', Response::HTTP_NO_CONTENT);
    }
}

