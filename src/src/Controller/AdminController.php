<?php

namespace App\Controller;

use App\Entity\Deal;
use App\Entity\User;
use App\Form\EditUserFormType;
use App\Repository\DealRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    #[Route('/admin', name: 'app_admin')]
    public function index(): Response
    {
        return $this->render('admin/admin.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    #[Route('/admin/users', name: 'app_admin_users')]
    public function users(UserRepository $users): Response
    {
        return $this->render('admin/admin_users.html.twig', [
            'users' => $users->findAll(),
            'controller_name' => 'AdminController',
        ]);
    }

    #[Route('/admin/users/{id}/delete', name: 'app_admin_user_id_delete')]
    public function usersIdDelete(User $user, UserRepository $rep): Response
    {
        $rep->remove($user, true);
        return $this->redirectToRoute('app_admin_users');

    }

    #[Route('/admin/users/{id}/edit', name: 'app_admin_user_id_edit')]
    public function usersIdEdit(User $user, Request $request, EntityManagerInterface $manager, UserRepository $rep): Response
    {
        $user = $rep->findOneBy(['id' => $user->getId()]);
        $form = $this->createForm(EditUserFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid() && $form->getData()->getPseudo() !== null
            && $form->getData()->getEmail() !== null) {
            $user
                ->setPseudo($form->get('Pseudo')->getData())
                ->setEmail($form->get('Email')->getData());
            $manager->persist($user);
            $manager->flush();
            return $this->redirectToRoute('app_admin_users');
        }

        return $this->render('admin/admin_users_id_edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/admin/articles', name: 'app_admin_articles')]
    public function admin_articles(DealRepository $dealRepository): Response
    {
        return $this->render('admin/admin_deals.html.twig', [
            'articles' => $dealRepository->findAllDeals(),
        ]);
    }

    #[Route('/admin/articles/{id}/delete', name: 'app_admin_article_id_delete')]
    public function admin_articlesIdDelete(Deal $deal, DealRepository $rep): Response
    {
        $rep->remove($deal, true);
        return $this->redirectToRoute('app_admin_articles');
    }
}
