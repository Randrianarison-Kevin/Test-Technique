<?php

namespace App\Controller;

use App\Entity\Test;
use App\Form\AjoutFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CrudController extends AbstractController
{
    #[Route('/ajout', name: 'app_ajout')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $ajout = new Test();
        $form = $this->createForm(AjoutFormType::class, $ajout);
        $form->handleRequest($request);

        //Verification du formulaire
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($ajout);
            $entityManager->flush();
        }
        return $this->render('ajout/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route("/supprimer/{id}", name : "supprimer" )]
    public function supprimer($id, EntityManagerInterface $entityManager)
    {
        $repository = $entityManager->getRepository(Test::class);
        $supprimer = $repository ->find($id);

        //Si l'entite est trouvée, elle est supprimer
        if ($supprimer) {
            $entityManager->remove($supprimer);
            $entityManager->flush();
        }
        return $this->redirectToRoute('app_affiche');
    }

    #[Route("/editer/{id}", name:"editer")]
    public function editer(EntityManagerInterface $entityManager, $id, Request $request)  
    {
        $repository = $entityManager->getRepository(Test::class);
        $entite = $repository->find($id);
        $form = $this->createForm(AjoutFormType::class, $entite);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            return $this->redirectToRoute('app_affiche');
        }
        return $this->render('edit/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }


}
