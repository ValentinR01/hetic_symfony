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
    #ToTEST!!!!!
    /**
     * @Route("/annonce/{id}/modifier", name="app_edit_deal")
     * @return Response
     */
    public function edit(Deal $deal, Request $request, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(DealFormType::class, $deal);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $deal = $form->getData();
            $deal->setDateCreation(new \DateTime());
            dd($form->getData());

            # TO CHANGE !
            #$deal->setPhoto($helper->uploadImg($form->getData('')));
            $deal->setSeller(new User());
            $deal->setIsSold(0);
            $deal->setIsPublished(1);
            $deal->setDatePublication(new \DateTime());



            $entityManager->persist($deal);
            $entityManager->flush();

            return $this->redirectToRoute('homepage');
        }

        return $this->render('createProduct.html.twig', [
            'dealForm' => $form->createView()
        ]);


    }

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
