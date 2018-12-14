<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrangeElephantController extends AbstractController
{
    /**
     * @Route("/orange/elephant", name="orange_elephant")
     */
    public function index(): Response
    {
        return $this->render('gentle_elephant/index.html.twig', [
            'controller_name' => 'GentleElephantController',
        ]);
    }
}
