<?php

namespace App\Controller;

use App\Entity\UploadFile;
use App\Form\UploadFormType;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

class ImportController extends AbstractController
{
    #[Route('/import', name: 'app_import')]
    public function index(Request $request, SluggerInterface $slugger): Response
    {
        $uploadFile = new UploadFile();
        $form = $this->createForm(UploadFormType::class, $uploadFile);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) 
        {
            $File = $form->get('ExcelFile')->getData();

            if ($File) {
                $originalFilename = pathinfo($File->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$File->guessExtension();

                try {
                    $File->move(
                        $this->getParameter('uploadFile_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    $this->addFlash('error', 'Une erreur s\'est produite lors du téléchargement du fichier.');
                }

                $uploadFile->setExcelFile($newFilename);
            }

            
            
        }
        return $this->render('import/index.html.twig', [
            'form' => $form
        ]);
    }
}