<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GentleElephantController extends AbstractController
{
    /**
     * @Route("/gentle/elephant", name="gentle_elephant")
     */
    public function index(): Response
    {
        return $this->render('gentle_elephant/index.html.twig', [
            'controller_name' => 'GentleElephantController',
        ]);
    }
}
