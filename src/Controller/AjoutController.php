<?php

namespace App\Controller;

use App\Entity\Test;
use App\Form\AjoutFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AjoutController extends AbstractController
{
    #[Route('/ajout', name: 'app_ajout')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $ajout = new Test();
        $form = $this->createForm(AjoutFormType::class, $ajout);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($ajout);
            $entityManager->flush();
        }
        return $this->render('ajout/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
