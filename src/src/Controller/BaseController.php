<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class BaseController extends AbstractController
{
    /**
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('index.html.twig');
    }
}