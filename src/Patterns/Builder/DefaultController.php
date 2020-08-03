<?php


namespace App\Patterns\Builder;


use Symfony\Component\HttpFoundation\Response;

class DefaultController
{
    public function index(): Response
    {
        return new Response('');
    }
}