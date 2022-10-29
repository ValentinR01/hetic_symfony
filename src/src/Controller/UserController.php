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
     * @Route("/account", name="app_user_show")
     */
    public function account(UserRepository $repository, DealRepository $dealRepo): Response
    {
        $user = $this->getUser();
        return $this->render('account.html.twig', [
            'user' => $user,
            'deals' => $dealRepo->findDealBySeller($user),
            'sellers' => $repository->findUserSellers($user),
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
