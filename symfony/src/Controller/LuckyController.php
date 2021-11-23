<?php


namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class LuckyController
{

    /**
     * @Route("/lucky")
     */
    public function lucky(): Response
    {
        return new Response(
            '<html><body>Lucky</body></html>'
        );
    }
}