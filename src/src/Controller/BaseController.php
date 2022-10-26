<?php

namespace App\Controller;

use App\Repository\DealRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BaseController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     * @return Response
     */
    public function index(DealRepository $repository): Response
    {
        $deals = $repository->findBy(
            array('Is_published' => 1),
            array('Date_publication' => 'DESC'),
            3,
            0
        );
        #dd($deals);
        return $this->render('index.html.twig', [
            'deals' => $deals,
        ]);
    }
}
