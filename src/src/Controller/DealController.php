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
use App\Controller\CommentFormType;
use App\Helper\ImgHelper;

class DealController extends AbstractController
{
    #ToTEST!!!!!
    /**
     * @Route("/annonce/{id}/modifier", name="app_edit_deal")
     * @return Response
     */
    public function edit(Deal $deal, Request $request, EntityManagerInterface $entityManager, ImgHelper $helper): Response
    {
        $form = $this->createForm(DealFormType::class, $deal);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $deal = $form->getData();
            $deal
            ->setDateCreation(new \DateTime())
            ->setDatePublication(new \DateTime())
            ->setMainPhoto($helper->uploadImg($form['MainPhoto']->getData()))
            ->setPhoto2($helper->uploadImg($form['Photo_2']->getData()))
            ->setPhoto2($helper->uploadImg($form['Photo_3']->getData()))
            ->setSeller($this->getUser())
            ->setIsSold(0)
            ->setIsPublished(1);

            $entityManager->persist($deal);
            $entityManager->flush();

            return $this->redirectToRoute('app_deal_show', array('id' => $deal->getId()));
        }


        return $this->render('modifyProduct.twig', [
            'dealForm' => $form->createView()
        ]);

    }

    /**
     * @Route("/nouvelle-annonce", name="app_create_deal")
     * @return Response
     */

    public function new(Request $request, EntityManagerInterface $entityManager, ImgHelper $helper): Response
    {
        $form = $this->createForm(DealFormType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $deal = $form->getData();
            $deal
            ->setDateCreation(new \DateTime())
            ->setDatePublication(new \DateTime())
            ->setMainPhoto($helper->uploadImg($form['MainPhoto']->getData()))
            ->setPhoto2($helper->uploadImg($form['Photo_2']->getData()))
            ->setPhoto2($helper->uploadImg($form['Photo_3']->getData()))
            ->setSeller($this->getUser())
            ->setIsSold(0)
            ->setIsPublished(1);

            $entityManager->persist($deal);
            $entityManager->flush();

            return $this->redirectToRoute('app_deal_show', array('id' => $deal->getId()));
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
        $comments = $commentRepository->findParentComments($id);
        $responses = $commentRepository->findChildComments($id);
        $recommendations = $dealRepository->findRecommendationsByDeal($id, $cat);

        return $this->render('product.html.twig', [
            'deal' => $deal, 'comments' => $comments, 'responses' => $responses, 'recommendations' => $recommendations
        ]);
    }

    /**
     * @Route("/annonces", name="app_all_deals")
     * @return Response
     */
    public function allProducts(DealRepository $dealRepository, CategoryRepository $categoryRepository): Response
    {
        $deals = $dealRepository->findAll();
        $cats = $categoryRepository->findAll();
        return $this->render('allProducts.html.twig', [
            'deals' => $deals, 'cats' => $cats
        ]);
    }

    /**
     * @Route("/annonces/{cat}", name="app_deals_by_cat")
     * @return Response
     */
    public function productsByCat(DealRepository $repository, CategoryRepository $categoryRepository, int $cat): Response
    {
        $deals = $repository->findBy(['Category' => $cat]);
        $cats = $categoryRepository->findAll();
        return $this->render('allProducts.html.twig', [
            'deals' => $deals, 'cats' => $cats
        ]);
    }
}
