<?php

namespace App\Controller;

use App\Controller\Traits\InertiaTrait;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    use InertiaTrait;

    #[Route('/', name: 'home')]
    public function index(): Response
    {
        $records = [
            [
                'name' => 'test'
            ],
            [
                'name' => 'test2'
            ]
        ];

        return $this->inertia('Home/Index', [
            'controllerName' => 'HomeController',
            'records' => $records,
        ]);
    }
}
