<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class testController extends AbstractController
{
    /**
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('index.html.twig');
    }

    /**
     * @return Response
     */
    public function account(): Response{
        return $this->render('account.html.twig');
    }

    /**
     * @return Response
     */
    public function createAccount(): Response{
        return $this->render('createAccount.html.twig');
    }

    /**
     * @return Response
     */
    public function product(): Response{
        return $this->render('product.html.twig');
    }

    /**
     * @return Response
     */
    public function createProduct(): Response{
        return $this->render('createProduct.html.twig');
    }

    /**
     * @return Response
     */
    public function allProducts(): Response{
        return $this->render('allProducts.html.twig');
    }
}