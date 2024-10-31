<?php

namespace App\Controller;

use App\Entity\Show;
use App\Form\Showtype1Type;
use App\Repository\TheatrePlayRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;


class TheaterplayController extends AbstractController
{
    #[Route('/theater', name: 'app_theaterplay')]
    public function index(): Response
    {
        return $this->render('theaterplay/index.html.twig', [
            'controller_name' => 'TheaterplayController',
        ]);
    }
    #[Route('/theaterplay', name: 'app_theaterplay')]
    public function DisplaypLAY(TheatrePlayRepository $tp): Response
    {
        $display = $tp->findAll();
        $display = $tp->findBytitleDuration();

        return $this->render('theaterplay/index.html.twig', [
            'display' => $display,
        ]);
    }
    #[Route('/new', name: 'add_show')]
    public function newshow(Request $request, ManagerRegistry $doctrine) {
      #  $em= $doctrine->getManager();
      # $show= new Show();
       # $show->setNbrSeat(30);
        $form= $this->createForm(Showtype1Type::class);
        #$form->handleRequest($request);
      #  if($form->isSubmitted()){
      #       $em->persist($show);
      #       $em->flush();
     #        return $this->redirectToRoute('app_theaterplay');
      #   }
        return $this->render('theaterplay/add.html.twig',[
            'title' => 'Add show',
            'form' => $form
        ]);
    }

}
