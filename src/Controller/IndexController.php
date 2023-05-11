<?php

namespace App\Controller;

use Exception;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     * @return Response
     * @throws Exception
     */
    public function number(): Response
    {
        $number = random_int(0, 10);

        return $this->render('base.html.twig', []);
    }
}