<?php

namespace App\Controller;

use App\Form\CommentFormType;
use App\Form\CreateAccountType;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Deal;
use App\Entity\User;
use App\Repository\DealRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

class CommentController extends AbstractController
{
        /**
     * @Route("/comment", name="app_create_comment")
     * @return Response
     */
    public function new(Request $request, EntityManagerInterface $entityManager)
    {
        $form = $this->createForm(CommentFormType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $comment = $form->getData();

            #$comment->setUser = security->getUser();
            $entityManager->persist($comment);
            $entityManager->flush();

            return $this->redirectToRoute('homepage');
        }


        return $form->createView();
    }


}