<?php

namespace App\Controller;

use App\Entity\Test;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AfficheController extends AbstractController
{
    #[Route('/affiche', name: 'app_affiche')]
    public function index(EntityManagerInterface $entityManagerInterface): Response
    {
        $repository = $entityManagerInterface->getRepository(Test::class);
        $test = $repository->findAll();
        return $this->render('affiche/index.html.twig', [
            'tests' => $test,
        ]);
    }

}
