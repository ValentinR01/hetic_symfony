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
    public function new(Request $request, Deal $deal, EntityManagerInterface $entityManager, $form)
    {
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $comment = $form->getData();
            $comment
            ->setUser($this->getUser())
            ->setDeal($deal)
            ->setDateCreation(new \DateTime());
            $entityManager->persist($comment);
            $entityManager->flush();

            return $this->redirectToRoute('app_deal_show', array('id' => $deal->getId()));
        }


        return $form;
    }


}