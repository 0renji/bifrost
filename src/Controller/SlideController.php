<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class SlideController extends AbstractController
{
    /**
     * @Route("/slides/{change}", methods={"GET","POST"})
     */
    public function changeSlide($change)
    {
        dump($change);
        //TODO get cached slide by currSlide
        return new JsonResponse(['changeSlide' => $change]);
    }
}