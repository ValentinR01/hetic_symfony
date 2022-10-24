<?php

namespace App\Controller;

use App\Form\DealFormType;
use App\Form\CreateAccountType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class dealController extends AbstractController
{

    /**
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
     * @return Response
     */
    public function product(): Response{
        return $this->render('product.html.twig');
    }

    /**
     * @return Response
     */
    public function allProducts(): Response{
        return $this->render('allProducts.html.twig');
    }
}