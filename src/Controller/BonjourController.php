<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BonjourController
{

    #[Route("/", name: "Bonjour")]
    public function Bonjour(){
        return new Response("Bonjour");
    }
}