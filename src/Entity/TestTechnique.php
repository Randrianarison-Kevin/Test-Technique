<?php

namespace App\Entity;

use App\Repository\TestTechniqueRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TestTechniqueRepository::class)]
class TestTechnique
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $CompteAffaire = null;

    #[ORM\Column(length: 255)]
    private ?string $CompteEvenement = null;

    #[ORM\Column(length: 255)]
    private ?string $CompteDernierEvenement = null;

    #[ORM\Column]
    private ?int $NumeroFiche = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $LibelleCivilite = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ProprietaireActuelDuVehicule = null;

    #[ORM\Column(length: 100)]
    private ?string $Nom = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $Prenom = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $NumeroEtNomDeLaVoie = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $ComplementAdresse1 = null;

    #[ORM\Column]
    private ?int $CodePostal = null;

    #[ORM\Column(length: 255)]
    private ?string $Ville = null;

    #[ORM\Column(nullable: true)]
    private ?int $TelephoneDomicile = null;

    #[ORM\Column(nullable: true)]
    private ?int $TelephonePortable = null;

    #[ORM\Column(nullable: true)]
    private ?int $TelephoneJob = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Email = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $DateDeMiseEnCirculation = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $DateAchat = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $DateDernierEvenement = null;

    #[ORM\Column(length: 100)]
    private ?string $LibelleMarque = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $LibelleModele = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Version = null;

    #[ORM\Column(length: 255)]
    private ?string $VIN = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Immatriculation = null;

    #[ORM\Column(length: 255)]
    private ?string $TypeDeProspect = null;

    #[ORM\Column(nullable: true)]
    private ?int $Kilometrage = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $LibelleEnergie = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $VendeurVN = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $VendeurVO = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $CommentaireDeFacturation = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $TypeVNVO = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $NumeroDeDossierVNVO = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $IntermediaireDeVenteVN = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $DateEvenement = null;

    #[ORM\Column(length: 100)]
    private ?string $OrigineEvenement = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCompteAffaire(): ?string
    {
        return $this->CompteAffaire;
    }

    public function setCompteAffaire(string $CompteAffaire): static
    {
        $this->CompteAffaire = $CompteAffaire;

        return $this;
    }

    public function getCompteEvenement(): ?string
    {
        return $this->CompteEvenement;
    }

    public function setCompteEvenement(string $CompteEvenement): static
    {
        $this->CompteEvenement = $CompteEvenement;

        return $this;
    }

    public function getCompteDernierEvenement(): ?string
    {
        return $this->CompteDernierEvenement;
    }

    public function setCompteDernierEvenement(string $CompteDernierEvenement): static
    {
        $this->CompteDernierEvenement = $CompteDernierEvenement;

        return $this;
    }

    public function getNumeroFiche(): ?int
    {
        return $this->NumeroFiche;
    }

    public function setNumeroFiche(int $NumeroFiche): static
    {
        $this->NumeroFiche = $NumeroFiche;

        return $this;
    }

    public function getLibelleCivilite(): ?string
    {
        return $this->LibelleCivilite;
    }

    public function setLibelleCivilite(?string $LibelleCivilite): static
    {
        $this->LibelleCivilite = $LibelleCivilite;

        return $this;
    }

    public function getProprietaireActuelDuVehicule(): ?string
    {
        return $this->ProprietaireActuelDuVehicule;
    }

    public function setProprietaireActuelDuVehicule(?string $ProprietaireActuelDuVehicule): static
    {
        $this->ProprietaireActuelDuVehicule = $ProprietaireActuelDuVehicule;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): static
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(?string $Prenom): static
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getNumeroEtNomDeLaVoie(): ?string
    {
        return $this->NumeroEtNomDeLaVoie;
    }

    public function setNumeroEtNomDeLaVoie(?string $NumeroEtNomDeLaVoie): static
    {
        $this->NumeroEtNomDeLaVoie = $NumeroEtNomDeLaVoie;

        return $this;
    }

    public function getComplementAdresse1(): ?string
    {
        return $this->ComplementAdresse1;
    }

    public function setComplementAdresse1(?string $ComplementAdresse1): static
    {
        $this->ComplementAdresse1 = $ComplementAdresse1;

        return $this;
    }

    public function getCodePostal(): ?int
    {
        return $this->CodePostal;
    }

    public function setCodePostal(int $CodePostal): static
    {
        $this->CodePostal = $CodePostal;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->Ville;
    }

    public function setVille(string $Ville): static
    {
        $this->Ville = $Ville;

        return $this;
    }

    public function getTelephoneDomicile(): ?int
    {
        return $this->TelephoneDomicile;
    }

    public function setTelephoneDomicile(?int $TelephoneDomicile): static
    {
        $this->TelephoneDomicile = $TelephoneDomicile;

        return $this;
    }

    public function getTelephonePortable(): ?int
    {
        return $this->TelephonePortable;
    }

    public function setTelephonePortable(?int $TelephonePortable): static
    {
        $this->TelephonePortable = $TelephonePortable;

        return $this;
    }

    public function getTelephoneJob(): ?int
    {
        return $this->TelephoneJob;
    }

    public function setTelephoneJob(?int $TelephoneJob): static
    {
        $this->TelephoneJob = $TelephoneJob;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(?string $Email): static
    {
        $this->Email = $Email;

        return $this;
    }

    public function getDateDeMiseEnCirculation(): ?\DateTimeInterface
    {
        return $this->DateDeMiseEnCirculation;
    }

    public function setDateDeMiseEnCirculation(?\DateTimeInterface $DateDeMiseEnCirculation): static
    {
        $this->DateDeMiseEnCirculation = $DateDeMiseEnCirculation;

        return $this;
    }

    public function getDateAchat(): ?\DateTimeInterface
    {
        return $this->DateAchat;
    }

    public function setDateAchat(?\DateTimeInterface $DateAchat): static
    {
        $this->DateAchat = $DateAchat;

        return $this;
    }

    public function getDateDernierEvenement(): ?\DateTimeInterface
    {
        return $this->DateDernierEvenement;
    }

    public function setDateDernierEvenement(\DateTimeInterface $DateDernierEvenement): static
    {
        $this->DateDernierEvenement = $DateDernierEvenement;

        return $this;
    }

    public function getLibelleMarque(): ?string
    {
        return $this->LibelleMarque;
    }

    public function setLibelleMarque(string $LibelleMarque): static
    {
        $this->LibelleMarque = $LibelleMarque;

        return $this;
    }

    public function getLibelleModele(): ?string
    {
        return $this->LibelleModele;
    }

    public function setLibelleModele(?string $LibelleModele): static
    {
        $this->LibelleModele = $LibelleModele;

        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->Version;
    }

    public function setVersion(?string $Version): static
    {
        $this->Version = $Version;

        return $this;
    }

    public function getVIN(): ?string
    {
        return $this->VIN;
    }

    public function setVIN(string $VIN): static
    {
        $this->VIN = $VIN;

        return $this;
    }

    public function getImmatriculation(): ?string
    {
        return $this->Immatriculation;
    }

    public function setImmatriculation(?string $Immatriculation): static
    {
        $this->Immatriculation = $Immatriculation;

        return $this;
    }

    public function getTypeDeProspect(): ?string
    {
        return $this->TypeDeProspect;
    }

    public function setTypeDeProspect(string $TypeDeProspect): static
    {
        $this->TypeDeProspect = $TypeDeProspect;

        return $this;
    }

    public function getKilometrage(): ?int
    {
        return $this->Kilometrage;
    }

    public function setKilometrage(?int $Kilometrage): static
    {
        $this->Kilometrage = $Kilometrage;

        return $this;
    }

    public function getLibelleEnergie(): ?string
    {
        return $this->LibelleEnergie;
    }

    public function setLibelleEnergie(?string $LibelleEnergie): static
    {
        $this->LibelleEnergie = $LibelleEnergie;

        return $this;
    }

    public function getVendeurVN(): ?string
    {
        return $this->VendeurVN;
    }

    public function setVendeurVN(?string $VendeurVN): static
    {
        $this->VendeurVN = $VendeurVN;

        return $this;
    }

    public function getVendeurVO(): ?string
    {
        return $this->VendeurVO;
    }

    public function setVendeurVO(?string $VendeurVO): static
    {
        $this->VendeurVO = $VendeurVO;

        return $this;
    }

    public function getCommentaireDeFacturation(): ?string
    {
        return $this->CommentaireDeFacturation;
    }

    public function setCommentaireDeFacturation(?string $CommentaireDeFacturation): static
    {
        $this->CommentaireDeFacturation = $CommentaireDeFacturation;

        return $this;
    }

    public function getTypeVNVO(): ?string
    {
        return $this->TypeVNVO;
    }

    public function setTypeVNVO(?string $TypeVNVO): static
    {
        $this->TypeVNVO = $TypeVNVO;

        return $this;
    }

    public function getNumeroDeDossierVNVO(): ?string
    {
        return $this->NumeroDeDossierVNVO;
    }

    public function setNumeroDeDossierVNVO(?string $NumeroDeDossierVNVO): static
    {
        $this->NumeroDeDossierVNVO = $NumeroDeDossierVNVO;

        return $this;
    }

    public function getIntermediaireDeVenteVN(): ?string
    {
        return $this->IntermediaireDeVenteVN;
    }

    public function setIntermediaireDeVenteVN(?string $IntermediaireDeVenteVN): static
    {
        $this->IntermediaireDeVenteVN = $IntermediaireDeVenteVN;

        return $this;
    }

    public function getDateEvenement(): ?\DateTimeInterface
    {
        return $this->DateEvenement;
    }

    public function setDateEvenement(\DateTimeInterface $DateEvenement): static
    {
        $this->DateEvenement = $DateEvenement;

        return $this;
    }

    public function getOrigineEvenement(): ?string
    {
        return $this->OrigineEvenement;
    }

    public function setOrigineEvenement(string $OrigineEvenement): static
    {
        $this->OrigineEvenement = $OrigineEvenement;

        return $this;
    }
}
