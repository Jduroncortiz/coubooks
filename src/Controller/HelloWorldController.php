<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HelloWorldController extends AbstractController
{
    #[Route('/welcome', name: 'welcome')]
    public function index(): Response
    {
        return new Response('<html><body><h1>Welcome to Symfony!</h1></body></html>');
    }

    #[Route('/welcome/{name}', name: 'welcome_name')]
    public function personalizedWelcome(string $name): Response
    {
        return new Response("<html><body><h1>Welcome, {$name}!</h1></body></html>");
    }
}
