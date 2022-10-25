<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\CreateAccountType;
use App\Repository\UserRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class UserController extends AbstractController
{
    /**
     * @return Response
     * @Route("/account/{pseudo}", name="app_user_show")
     */
    public function account(UserRepository $repository, string $pseudo): Response
    {
        $user = $repository->findOneBy(['Pseudo' => $pseudo]);

        if (!$user) {
            throw $this->createNotFoundException(
                "Cet utilisateur n'existe pas..."
            );
        }

        return $this->render('account.html.twig', [
            'user' => $user
        ]);
    }

    /**
     * @Route("/create-account", name="app_create_account")
     * @return Response
     */
    public function new(): Response
    {
        return $this->render('createAccount.html.twig');
    }
}
