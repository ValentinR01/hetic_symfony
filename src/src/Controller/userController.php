<?php

namespace App\Controller;

use App\Form\CreateAccountType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class userController extends AbstractController
{

    /**
     * @return Response
     */
    public function account(): Response
    {
        return $this->render('account.html.twig');
    }

    /**
     * @return Response
     */
    public function new(): Response
    {
        return $this->render('createAccount.html.twig');
    }

}