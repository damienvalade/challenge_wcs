<?php


namespace App\Controller;


use App\Repository\CandidatesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    /**
     * @Route("/", name="app_home")
     * return Response
     * @param CandidatesRepository $candidatesRepository
     * @return Response
     */
    public function getHomeAction(CandidatesRepository $candidatesRepository): Response
    {
        return $this->render('PublicSide/general/home.html.twig',[
            'candidates' => $candidatesRepository->findAll()
        ]);
    }
}