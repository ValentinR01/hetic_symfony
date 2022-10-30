<?php

namespace App\Controller;

use App\Entity\Deal;
use App\Form\DealFormType;
use App\Form\CreateAccountType;
use App\Repository\CategoryRepository;
use App\Repository\CommentRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\Request;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\DealRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;
use App\Helper\ImgHelper;
use App\Form\CommentFormType;

class DealController extends AbstractController
{
    /**
     * @Route("/nouvelle-annonce", name="app_create_deal")
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @param ImgHelper $helper
     * @return Response
     */
    public function new(Request $request, EntityManagerInterface $entityManager, ImgHelper $helper): Response
    {
        #Access Control
        $this->denyAccessUnlessGranted('ROLE_USER');

        #Create Form
        $form = $this->createForm(DealFormType::class);

        #Handle Form Submit
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $deal = $form->getData();
            $deal
            ->setDateCreation(new \DateTime())
            ->setDatePublication(new \DateTime())
            ->setMainPhoto($helper->uploadImg($form['MainPhoto']->getData()))
            ->setPhoto2($helper->uploadImg($form['Photo_2']->getData()))
            ->setPhoto3($helper->uploadImg($form['Photo_3']->getData()))
            ->setSeller($this->getUser())
            ->setIsSold(0)
            ->setIsPublished(1);

            $entityManager->persist($deal);
            $entityManager->flush();
            $this->addFlash('success', 'Votre annonce a bien été créée !');
            return $this->redirectToRoute('app_deal_show', array('id' => $deal->getId()));
        }


        return $this->render('createProduct.html.twig', [
            'dealForm' => $form->createView()
        ]);
    }

    /**
     * @Route("/annonce/{id}/modifier", name="app_edit_deal")
     * @param Deal $deal
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @param ImgHelper $helper
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
            ->setPhoto3($helper->uploadImg($form['Photo_3']->getData()))
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
     * @Route("/annonce/{id}", name="app_deal_show")
     * @param Deal $deal
     * @param DealRepository $dealRepository
     * @param CommentRepository $commentRepository
     * @param int $id
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @return Response
     */
    public function show(Deal $deal, DealRepository $dealRepository, CommentRepository $commentRepository, int $id, Request $request, EntityManagerInterface $entityManager): Response
    {
        // Retrieve Data
        $cat = $deal->getCategory();
        $comments = $commentRepository->findParentComments($id);
        $responses = $commentRepository->findChildComments($id);
        $recommendations = $dealRepository->findRecommendationsByDeal($id, $cat);

        // Create Comment Form
        $commentForm =  $this->createForm(CommentFormType::class);
        $commentForm->handleRequest($request);
        if ($commentForm->isSubmitted() && $commentForm->isValid()) {
            $comment = $commentForm->getData();
            $comment
            ->setUser($this->getUser())
            ->setDeal($deal)
            ->setDateCreation(new \DateTime());
            $entityManager->persist($comment);
            $entityManager->flush();
            return $this->redirectToRoute('app_deal_show', array('id' => $deal->getId()));
        }

        return $this->render('product.html.twig', [
            'deal' => $deal, 'comments' => $comments, 'responses' => $responses, 'recommendations' => $recommendations, 'commentForm' => $commentForm->createView()
        ]);
    }

    /**
     * @Route("/annonces", name="app_all_deals")
     * @param DealRepository $repository
     * @param CategoryRepository $categoryRepository
     * @param Request $request
     * @param PaginatorInterface $paginator
     * @return Response
     */
    public function allProducts(DealRepository $repository, CategoryRepository $categoryRepository, Request $request, PaginatorInterface $paginator): Response
    {
        $search = $request->query->get('q');
        $deals = $repository->findAllQueryBuilder($search);

        $pagination = $paginator->paginate(
            $deals,
            $request->query->getInt('page', 1),
            9
        );
        $cats = $categoryRepository->findAll();
        return $this->render('allProducts.html.twig', [
            'deals' => $pagination, 'cats' => $cats
        ]);
    }

    /**
     * @Route("/annonces/{cat}", name="app_deals_by_cat")
     * @param DealRepository $repository
     * @param CategoryRepository $categoryRepository
     * @param int $cat
     * @param Request $request
     * @param PaginatorInterface $paginator
     * @return Response
     */
    public function productsByCat(DealRepository $repository, CategoryRepository $categoryRepository, int $cat, Request $request, PaginatorInterface $paginator): Response
    {
        $search = $request->query->get('q');
        $deals = $repository->findByCategoryQueryBuilder(['Category' => $cat], $search);
        $cats = $categoryRepository->findAll();

        $pagination = $paginator->paginate(
            $deals,
            $request->query->getInt('page', 1),
            9
        );
        return $this->render('allProducts.html.twig', [
            'deals' => $pagination, 'cats' => $cats
        ]);
    }

    /**
     * @Route("/annonces/{id}/acheter", name="app_buy_deal")
     * @param Deal $deal
     * @param UserRepository $userRepository
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @return Response
     */
    public function buyDeal(Deal $deal, UserRepository $userRepository, Request $request, EntityManagerInterface $entityManager): Response
    {
        $seller = $deal->getSeller();
        $user = $this->getUser();
        $buyers = $seller->getSoldTo();
        if ($buyers and str_contains($buyers, $user)) {
            $seller->setSoldTo($user);
        }elseif($buyers){
            $seller->setSoldTo($buyers . ', ' . $user);
        } else {
            $seller->setSoldTo($user);
        }
        $entityManager->flush();

        return $this->render('buy.html.twig');
    }

}
