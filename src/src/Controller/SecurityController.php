<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Doctrine\ORM\EntityManagerInterface;

use App\Entity\User;
use App\Form\RegistrationType;

class SecurityController extends AbstractController
{
    #[Route('/registration', name: 'app_security_registration')]
    public function registration(Request $request, EntityManagerInterface $manager, UserPasswordHasherInterface $encode): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $hash = $encode->hashPassword($user, $user->getPassword());
            $user->setPassword($hash);
            $manager->persist($user);
            $manager->flush();

            return $this->redirectToRoute('app_security_login');
        }

        return $this->render('security/registration.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/login', name: 'app_security_login')]
    public function login(): Response
    {
        return $this->render('security/login.html.twig');
    }

    #[Route('/logout', name: 'app_security_logout')]
    public function logout(): void
    {
        //
    }
}
