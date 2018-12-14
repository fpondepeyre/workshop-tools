<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class OrangeElephantController extends AbstractController
{
    /**
     * @Route("/orange/elephant", name="orange_elephant")
     */
    public function index()
    {
        return $this->render('gentle_elephant/index.html.twig', [
            'controller_name' => 'GentleElephantController',
        ]);
    }

    public function sluggify(string $string, string $separator = '-', int $maxLength = 96): string
    {
        $title = iconv('UTF-8', 'ASCII//TRANSLIT', $string);
        $title = preg_replace("%[^-/+|\w ]%", '', $title);
        $title = strtolower(trim(substr($title, 0, $maxLength), '-'));
        $title = preg_replace("/[\/_|+ -]+/", $separator, $title);

        return $title;
    }
}
