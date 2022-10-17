<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/user/new', name: 'user')]
    public function new(EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $user->setPseudo('dodo_68')
            ->setEmail('dodo_68@gmail.com')
            ->setNbUserLikes(4)
            ->setNbUserDislikes(0)
            ->setPassword('test1')
            ->setBoughtOtherUsersPseudo('jodelacreuse, luna34')
            ->setBoughtOtherUsersId('2,3');

        $entityManager->persist($user);
        $entityManager->flush();


        return new Response(sprintf('Un nouvel user avec l\'id #%d et le mail %s a été crée',
            $user->getId(),
            $user->getEmail()
        ));
    }
}
