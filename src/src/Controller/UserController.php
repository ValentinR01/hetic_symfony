<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\CreateAccountType;
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
     * @Route("/compte/{pseudo}", name="app_user_show")
     */
    public function account(UserRepository $repository, DealRepository $dealRepo, string $pseudo): Response
    {
        $user = $repository->findOneBy(['Pseudo' => $pseudo]);
        $deals = $dealRepo->findDealBySeller($user);
        $sellers = $repository->findUserSellers($pseudo);

        if (!$user) {
            throw $this->createNotFoundException(
                "Cet utilisateur n'existe pas..."
            );
        }

        return $this->render('account.html.twig', [
            'account' => $user, 'deals' => $deals, 'sellers' => $sellers
        ]);
    }

    /**
     * @Route("/creation-compte", name="app_create_account")
     * @return Response
     */
    public function new(): Response
    {
        return $this->render('createAccount.html.twig');
    }

    /**
     * @Route("/account/{id}/vote", name="app_vote_sellers")
     * @return Response
     */
    public function sellerVote(User $user, int $id, Request $request, EntityManagerInterface $entityManager): Response
    {
        $vote = $request->request->get('vote');
        $dislikes = $user->getNbUserDislikes();
        if ($vote === 'like'){
            $user->voteLike();
        }
        elseif ($vote === 'dislike'){
            $user->voteDislike();
        }

        $entityManager->flush();
        return $this->redirectToRoute('app_homepage');
    }
}
