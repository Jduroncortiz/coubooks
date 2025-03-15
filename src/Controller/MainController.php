<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
//  #[Route('/', name: 'app_home')]
//  This makes the route to the folder itself, so it will load automatically the index.php
//  The parameter name: is the way that symfony identifies this route for another uses
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('index.html.twig');
    }
}
