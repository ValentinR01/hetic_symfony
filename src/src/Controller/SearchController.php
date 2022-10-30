<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Repository\DealRepository;
use App\Form\SearchDealType;

class SearchController extends AbstractController
{
    #[Route('/search', name: 'search_deals')]
    public function index(DealRepository $repository, Request $request, SessionInterface $session)
    {
        $deals = $session->get('search-data');

        $form = $this->createForm(SearchDealType::class);

        $search = $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $deals = $repository->search($search->get('words')->getData());
        }
        return $this->render('search.html.twig', [
            'deals' => $deals,
            'form' => $form->createView()
        ]);
    }
}
