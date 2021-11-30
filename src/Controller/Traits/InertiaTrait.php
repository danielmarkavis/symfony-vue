<?php

namespace App\Controller\Traits;

trait InertiaTrait
{
    protected function inertia($view, $data)
    {
        return parent::render('app.html.twig', [
            '_page' => $view,
            'data' => $data
        ]);
    }
}
