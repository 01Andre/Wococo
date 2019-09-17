<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class WelcomeController extends AbstractController
{
    /**
     * @Route("/bienvenue", name="welcome")
     */
    public function index()
    {
        return $this->render('welcome/index.html.twig', [
        ]);
    }
}
