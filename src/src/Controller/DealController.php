<?php

namespace App\Controller;

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
     * @Route("/create-product", name="")
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
     * @Route("/product/{id}", name="product_show")
     * @return Response
     */
    public function show(DealRepository $repository, int $id): Response
    {
        $deal = $repository->find($id);

        if (!$deal) {
            throw $this->createNotFoundException(
                'No product found for id ' . $id
            );
        }

        return $this->render('product.html.twig', [
            'deal' => $deal
        ]);
    }

    /**
     * @Route("/all-products", name="all-products")
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
