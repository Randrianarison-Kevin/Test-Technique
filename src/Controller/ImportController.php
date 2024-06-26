<?php

namespace App\Controller;

use App\Entity\Test;
use App\Entity\UploadFile;
use App\Form\UploadFormType;
use Doctrine\ORM\EntityManagerInterface;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

class ImportController extends AbstractController
{
    #[Route('/', name: 'app_import')]

    public function index(Request $request, SluggerInterface $slugger, EntityManagerInterface $entityManager): Response
    {
        $uploadFile = new UploadFile();

        //Creation de formulaire
        $form = $this->createForm(UploadFormType::class, $uploadFile);
        $form->handleRequest($request);

        //Verification de la formulaire
        if ($form->isSubmitted() && $form->isValid()) 
        {
            //Recuperation et traitement du fichier
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

                    // Traitement du fichier excel
                    $spreadsheet = IOFactory::load($this->getParameter('uploadFile_directory').'/'.$newFilename);
                    $sheetData = $spreadsheet->getActiveSheet()->removeRow(1);
                    $sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
                    //Traitement de chaque ligne
                    foreach ($sheetData as $row) {
                        $entity = new Test();
                        $entity->setCompteAffaire($row['A']);
                        $compteEvenement = $row['B'];
                        if ($compteEvenement === null) {
                            $compteEvenement = ''; 
                        }
                        $entity->setCompteEvenement($compteEvenement);
                        $entity->setCompteDernierEvenement($row['C']);
                        $entity->setNumeroFiche((int)$row['D']);
                        $entity->setLibelleCivilite($row['E']);
                        $entity->setProprietaireActuelDuVehicule($row['F']);
                        $entity->setNom($row['G']);
                        $entity->setPrenom($row['H']);
                        $entity->setNumeroEtNomDeLaVoie($row['I']);
                        $entity->setComplementAdresse1($row['J']);
                        $entity->setCodePostal((int)$row['K']);
                        $entity->setVille($row['L']);
                        $entity->setTelephoneDomicile((int)$row['M']);
                        $entity->setTelephonePortable((int)$row['N']);
                        $entity->setTelephoneJob((int)$row['O']);
                        $entity->setEmail($row['P']);
                        $datedemiseencircilation = $row['Q'];
                        $dateC = \DateTime::createFromFormat('d/m/Y', $datedemiseencircilation);
                        if ($dateC === false) {
                            $this->addFlash('error', "La date '$datedemiseencircilation' n'est pas valide.");
                            $entity->setDateDeMiseEnCirculation(null);
                        } else {
                            $entity->setDateDeMiseEnCirculation($dateC);
                        }
                        $dateAchat = $row['R'];
                        $dateA = \DateTime::createFromFormat('d/m/Y', $dateAchat);
                        if ($dateA === false) {
                            $this->addFlash('error', "La date '$dateAchat' n'est pas valide.");
                            $entity->setDateAchat(null);
                        } else {
                            $entity->setDateAchat($dateA);
                        }
                        $DateDernierEvenement = $row['S'];
                        $dateD = \DateTime::createFromFormat('d/m/Y', $DateDernierEvenement);
                        if ($dateD === false) {
                            $this->addFlash('error', "La date '$DateDernierEvenement' n'est pas valide.");
                            $entity->setDateDernierEvenement(null);
                        } else {
                            $entity->setDateDernierEvenement($dateD);
                        }
                       
                        $entity->setLibelleMarque($row['T']);
                        $entity->setLibelleModele($row['U']);
                        $entity->setVersion($row['V']);
                        $entity->setVIN($row['W']);
                        $entity->setImmatriculation($row['X']);
                        $entity->setTypeDeProspect($row['Y']);
                        $entity->setKilometrage((int)$row['Z']);
                        $entity->setLibelleEnergie($row['AA']);
                        $entity->setVendeurVN($row['AB']);
                        $entity->setVendeurVO($row['AC']);
                        $entity->setCommentaireDeFacturation($row['AD']);
                        $entity->setTypeVNVO($row['AE']);
                        $entity->setNumeroDeDossierVNVO($row['AF']);
                        $entity->setIntermediaireDeVenteVN($row['AG']);
                     
                        $setDateEvenement = $row['AH'];
                        $dateDE = \DateTime::createFromFormat('d/m/Y', $setDateEvenement);
                        if ($dateDE === false) {
                            $this->addFlash('error', "La date '$setDateEvenement' n'est pas valide.");
                            $entity->setDateEvenement(null);
                        } else {
                            $entity->setDateEvenement($dateDE);
                        }
                        $entity->setOrigineEvenement($row['AI']);
                        
                        
                        $entityManager->persist($entity);
                    }
                    $entityManager->flush();

                    
                    
                } catch (FileException $e) {
                    $this->addFlash('error', 'Une erreur s\'est produite lors du téléchargement du fichier.');
                }
                

                $uploadFile->setExcelFile($newFilename);
               
            }
            $this->addFlash(
                'success',
                'Le fichier a été soumis avec succès !'
            );
            
        }
        return $this->render('import/index.html.twig', [
            'form' => $form
        ]);
    }


}