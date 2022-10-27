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
use Doctrine\ORM\EntityManagerInterface;

class DealController extends AbstractController
{

    /**
     * @Route("/nouvelle-annonce", name="app_create_deal")
     * @return Response
     */

    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(DealFormType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $deal = $form->getData();
            $deal->setProductStateId(1);
            $deal->setDateCreation(new \DateTime());

            # TO CHANGE !
            $deal->setPhoto('photo');
            $deal->setSeller('x');
            $deal->setIsSold(0);
            $deal->setIsPublished(1);
            

            $entityManager->persist($deal);
            $entityManager->flush();

            return $this->redirectToRoute('homepage');
        }


        return $this->render('createProduct.html.twig', [
            'dealForm' => $form->createView()
        ]);
    }

    /**
     * @Route("/annonce/{id}", name="app_deal_show")
     * @return Response
     */
    public function show(Deal $deal, int $id): Response
    {
        #$deal = $repository->find($id);

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
