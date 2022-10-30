<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\CreateAccountType;
use App\Form\EditUserFormType;
use App\Repository\DealRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class UserController extends AbstractController
{
    /**
     * @return Response
     * @Route("/account", name="app_user_show")
     */
    public function account(UserRepository $repository, DealRepository $dealRepo): Response
    {
        $user = $this->getUser();
        return $this->render('user/account.html.twig', [
            'deals' => $dealRepo->findDealBySeller($user),
            'sellers' => $repository->findUserSellers($user),
        ]);
    }

    /**
     * @return Response
     * @Route("/account/edit", name="app_user_edit")
     */
    public function edit(Request $request, EntityManagerInterface $manager): Response
    {
        $user = $this->getUser();
        $form = $this->createForm(EditUserFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid() && $form->getData()->getPseudo() !== null
            && $form->getData()->getEmail() !== null) {
            $user
                ->setPseudo($form->get('Pseudo')->getData())
                ->setEmail($form->get('Email')->getData());
            $manager->persist($user);
            $manager->flush();
            $this->addFlash('success', 'Vos informations ont bien été modifiée.');

        }
        return $this->render('user/account_edit.html.twig', [
            'form' => $form->createView(),
            'user' => $user,
        ]);
    }

    /**
     * @Route("/account/{id}/vote/{slug}", name="app_vote_sellers")
     * @return Response
     */
    public function sellerVote(User $user, int $id, string $slug, Request $request, EntityManagerInterface $entityManager): Response
    {
        $vote = $request->request->get('vote');
        if ($vote === 'like'){
            $user->voteLike();
        }
        elseif ($vote === 'dislike'){
            $user->voteDislike();
        }

        $entityManager->flush();
        return $this->redirectToRoute('app_user_show', [
            'id'=>$id, 'pseudo'=>$slug
        ]);
    }
}
