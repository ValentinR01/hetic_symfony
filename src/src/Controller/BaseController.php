<?php

namespace App\Controller;

use App\Repository\DealRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Form\SearchDealType;

class BaseController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     * @return Response
     */
    public function index(DealRepository $repository, Request $request, SessionInterface $session): Response
    {

        $deals = $repository->findBy(
            array('Is_published' => 1),
            array('Date_publication' => 'DESC'),
            9,
            0
        );

        $form = $this->createForm(SearchDealType::class);

        $search = $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $deals = $repository->search($search->get('words')->getData());
            $session->set('search-data', $deals);
            return $this->redirect('search' . $request->getQueryString());
        }

        return $this->render('index.html.twig', [
            'deals' => $deals,
            'form' => $form->createView()
        ]);
    }
}
