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
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Doctrine\ORM\EntityManagerInterface;
use App\Helper\ImgHelper;
use App\Form\CommentFormType;
use Symfony\Component\HttpFoundation\File\File;
use App\Form\SearchDealType;


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
        $this->denyAccessUnlessGranted('ROLE_USER');
      
        $form = $this->createForm(DealFormType::class, $deal);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $deal = $form->getData();
            $deal->setDateUpdate(new \DateTime());

            // Check if photos have been updated 
            if ($form['MainPhoto']->getData()){
                $deal->setMainPhoto($helper->uploadImg($form['MainPhoto']->getData()));
            }
            if ($form['Photo_2']->getData()){
                $deal->setPhoto2($helper->uploadImg($form['Photo_2']->getData()));
            }
            if ($form['Photo_3']->getData()){
                $deal->setPhoto3($helper->uploadImg($form['Photo_3']->getData()));
            }
            $entityManager->persist($deal);
            $entityManager->flush();
            $this->addFlash('success', 'Votre annonce a bien été modifiée !');
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

        $form = $this->createForm(SearchDealType::class);

        $pagination = $paginator->paginate(
            $deals,
            $request->query->getInt('page', 1),
            9
        );

        return $this->render('catProducts.html.twig', [
            'deals' => $pagination, 'cats' => $cats, 'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/annonces", name="app_all_deals")
     * @return Response
     */
    public function searchDeals(DealRepository $repository, Request $request, SessionInterface $session)
    {
        $deals = $repository->findAll();

        $form = $this->createForm(SearchDealType::class);

        $search = $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $deals = $repository->search($search->get('words')->getData());
            $session->set('search-data', $deals);
            return $this->redirect('search' . $request->getQueryString());
        }
        return $this->render('allProducts.html.twig', [
            'deals' => $deals,
            'form' => $form->createView()
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
        $this->denyAccessUnlessGranted('ROLE_USER');

        $seller = $deal->getSeller();
        $user = $this->getUser();
        $buyers = $seller->getSoldTo();
        if ($buyers and str_contains($buyers, $user)) {
            $seller->setSoldTo($user);
        } elseif ($buyers) {
            $seller->setSoldTo($buyers . ', ' . $user);
        } else {
            $seller->setSoldTo($user);
        }
        $entityManager->flush();

        return $this->render('buy.html.twig');
    }
}
