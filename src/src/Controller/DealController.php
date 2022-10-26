<?php

namespace App\Controller;

use App\Entity\Deal;
use App\Form\DealFormType;
use App\Form\CreateAccountType;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\DealRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class DealController extends AbstractController
{

    /**
     * @Route("/nouvelle-annonce", name="app_create_deal")
     * @return Response
     */

    public function new(Request $request): Response
    {
        $form = $this->createForm(DealFormType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $deal = new Deal();
            $deal->setPrice($data['Prix'])
                ->setTitle($data['Titre'])
                ->setDescription($data['Description']);
        }


        return $this->render('createProduct.html.twig', [
            'dealForm' => $form->createView()
        ]);
    }

    /**
     * @Route("/annonce/{id}", name="app_deal_show")
     * @return Response
     */
    public function show(Deal $deal, DealRepository $repository, int $id): Response
    {
        $cat = $deal->getCategory();
        $recommendations = $repository->findRecommendationsByDeal($id, $cat);

        return $this->render('product.html.twig', [
            'deal' => $deal, 'recommendations' => $recommendations
        ]);
    }

    /**
     * @Route("/annonces", name="app_all_deals")
     * @return Response
     */
    public function allProducts(DealRepository $repository): Response
    {
        $deals = $repository->findAll();
        return $this->render('allProducts.html.twig', [
            'deals' => $deals
        ]);
    }
}
