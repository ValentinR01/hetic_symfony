<?php

namespace App\Controller;

use App\Entity\Deal;
use App\Form\DealFormType;
use App\Form\CreateAccountType;
use App\Repository\CategoryRepository;
use App\Repository\CommentRepository;
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
    public function show(Deal $deal, DealRepository $dealRepository, CommentRepository $commentRepository, int $id): Response
    {
        $cat = $deal->getCategory();
        $recommendations = $dealRepository->findRecommendationsByDeal($id, $cat);
        $comments = $commentRepository->findBy();

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

    /**
     * @Route("/annonces/{cat}", name="app_deals_by_cat")
     * @return Response
     */
    public function productsByCat(DealRepository $repository, int $cat): Response
    {
        $deals = $repository->findBy(['Category' => $cat]);
        return $this->render('allProducts.html.twig', [
            'deals' => $deals
        ]);
    }
}
