<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AppController extends AbstractController
{
    #[Route('/')]
    public function homepage(): Response
    {
        $netWorth = 4_200_000;
        return $this->render('app/homepage.html.twig', [ 'total' => $netWorth]);
    }
}
