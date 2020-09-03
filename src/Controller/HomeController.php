<?php


namespace App\Controller;


use App\Entity\Candidates;
use App\Form\CandidateType;
use App\Repository\CandidatesRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    /**
     * @Route("/", name="app_home")
     * return Response
     * @param CandidatesRepository $candidatesRepository
     * @param Request $request
     * @return Response
     */
    public function getHomeAction(CandidatesRepository $candidatesRepository, Request $request): Response
    {
        $candidate = new Candidates();
        $form = $this->createForm(CandidateType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $candidate->setName($form->get('name')->getData());
            $candidate->setQuality($form->get('quality')->getData());
            $entityManager->persist($candidate);
            $entityManager->flush();
        }
        return $this->render('PublicSide/general/home.html.twig',[
            'candidates' => $candidatesRepository->findAll(),
            'form' => $form->createView()
        ]);
    }
}