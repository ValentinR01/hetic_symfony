<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Doctrine\ORM\EntityManagerInterface;
use App\Helper\ImgHelper;

use App\Entity\User;
use App\Form\RegistrationType;

class SecurityController extends AbstractController
{
    #[Route('/registration', name: 'app_security_registration')]
    public function registration(Request $request, EntityManagerInterface $manager, UserPasswordHasherInterface $encode, ImgHelper $helper): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid() && $form->getData()->getPseudo() !== null
            && $form->getData()->getEmail() !== null && $form->getData()->getPassword() !== null) {
            if (preg_match('/@end.com$/', $form->getData()->getEmail())) {
                $user->setRoles(['ROLE_ADMIN']);
            }
            $hash = $encode->hashPassword($user, $user->getPassword());
            $user->setPassword($hash);
            $user->setPhoto($helper->uploadImg($form['Photo']->getData()));
            $manager->persist($user);
            $manager->flush();
            $this->addFlash('success', 'Votre compte a bien été créé ! Vous pouvez maintenant vous connecter.');
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
