<?php


namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class HomeController
{
    /**
     *首页
     * @Route("/")
     */
    public function index(): Response
    {
        return new Response(
            '<html><body>Welcome</body></html>'
        );
    }
}