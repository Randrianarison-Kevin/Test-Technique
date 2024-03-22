<?php

namespace App\Form;

use App\Entity\Test;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AjoutFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('CompteAffaire')
            ->add('CompteEvenement')
            ->add('CompteDernierEvenement')
            ->add('NumeroFiche')
            ->add('LibelleCivilite')
            ->add('ProprietaireActuelDuVehicule')
            ->add('Nom')
            ->add('Prenom')
            ->add('NumeroEtNomDeLaVoie')
            ->add('ComplementAdresse1')
            ->add('CodePostal')
            ->add('Ville')
            ->add('TelephoneDomicile')
            ->add('TelephonePortable')
            ->add('TelephoneJob')
            ->add('Email')
            ->add('DateDeMiseEnCirculation', null, [
                'widget' => 'single_text'
            ])
            ->add('DateAchat', null, [
                'widget' => 'single_text'
            ])
            ->add('DateDernierEvenement', null, [
                'widget' => 'single_text'
            ])
            ->add('LibelleMarque')
            ->add('LibelleModele')
            ->add('Version')
            ->add('VIN')
            ->add('Immatriculation')
            ->add('TypeDeProspect')
            ->add('Kilometrage')
            ->add('LibelleEnergie')
            ->add('VendeurVN')
            ->add('VendeurVO')
            ->add('CommentaireDeFacturation')
            ->add('TypeVNVO')
            ->add('NumeroDeDossierVNVO')
            ->add('IntermediaireDeVenteVN')
            ->add('DateEvenement', null, [
                'widget' => 'single_text'
            ])
            ->add('OrigineEvenement')
            ->add('save', SubmitType::class, [
                'label' => 'Ajouter'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Test::class,
        ]);
    }
}
