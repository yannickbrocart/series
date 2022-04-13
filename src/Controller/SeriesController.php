<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/series', name: 'series_')]

class SeriesController extends AbstractController
{
    #[Route('', name: 'list')]
    public function list(Request $request): Response
    {
        //dd($request);
        return $this->render('series/list.html.twig',[]);
    }

    #[Route('/details/{id}', name: 'details')]
    public function details(int $id): Response
    {
        return $this->render('series/details.html.twig',[]);
    }

    #[Route('/create', name: 'create')]
    public function create(): Response
    {
        return $this->render('series/create.html.twig',[]);
    }
}