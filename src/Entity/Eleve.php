<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EleveRepository")
 */
class Eleve
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $Matricule;

    /**
     * @ORM\Column(type="text")
     */
    private $Prenoms;

    /**
     * @ORM\Column(type="text")
     */
    private $Nom;

    /**
     * @ORM\Column(type="text")
     */
    private $PaysDeNaissance;

    /**
     * @ORM\Column(type="text")
     */
    private $LieuDeNaissance;

    /**
     * @ORM\Column(type="date")
     */
    private $DateDeNaissance;

    /**
     * @ORM\Column(type="text")
     */
    private $Sexe;

    /**
     * @ORM\Column(type="text")
     */
    private $AdresseDeResidence;

    /**
     * @ORM\Column(type="integer")
     */
    private $TelephoneDomicile;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $TelephoneEleve;

    /**
     * @ORM\Column(type="date")
     */
    private $AnneeDarrivee;

    /**
     * @ORM\Column(type="text")
     */
    private $ParentResident;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $AutreParentResident;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $PetitFrereOuSoeur;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $FrereOuSoeur;

    /**
     * @ORM\Column(type="text")
     */
    private $PreferenceManuel;

    /**
     * @ORM\Column(type="text")
     */
    private $TolerenceParacetamol;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $MaladieSignale;

    /**
     * @ORM\Column(type="integer")
     */
    private $CodeFamille;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatricule(): ?string
    {
        return $this->Matricule;
    }

    public function setMatricule(string $Matricule): self
    {
        $this->Matricule = $Matricule;

        return $this;
    }

    public function getPrenoms(): ?string
    {
        return $this->Prenoms;
    }

    public function setPrenoms(string $Prenoms): self
    {
        $this->Prenoms = $Prenoms;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPaysDeNaissance(): ?string
    {
        return $this->PaysDeNaissance;
    }

    public function setPaysDeNaissance(string $PaysDeNaissance): self
    {
        $this->PaysDeNaissance = $PaysDeNaissance;

        return $this;
    }

    public function getLieuDeNaissance(): ?string
    {
        return $this->LieuDeNaissance;
    }

    public function setLieuDeNaissance(string $LieuDeNaissance): self
    {
        $this->LieuDeNaissance = $LieuDeNaissance;

        return $this;
    }

    public function getDateDeNaissance(): ?\DateTimeInterface
    {
        return $this->DateDeNaissance;
    }

    public function setDateDeNaissance(\DateTimeInterface $DateDeNaissance): self
    {
        $this->DateDeNaissance = $DateDeNaissance;

        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->Sexe;
    }

    public function setSexe(string $Sexe): self
    {
        $this->Sexe = $Sexe;

        return $this;
    }

    public function getAdresseDeResidence(): ?string
    {
        return $this->AdresseDeResidence;
    }

    public function setAdresseDeResidence(string $AdresseDeResidence): self
    {
        $this->AdresseDeResidence = $AdresseDeResidence;

        return $this;
    }

    public function getTelephoneDomicile(): ?int
    {
        return $this->TelephoneDomicile;
    }

    public function setTelephoneDomicile(int $TelephoneDomicile): self
    {
        $this->TelephoneDomicile = $TelephoneDomicile;

        return $this;
    }

    public function getTelephoneEleve(): ?int
    {
        return $this->TelephoneEleve;
    }

    public function setTelephoneEleve(?int $TelephoneEleve): self
    {
        $this->TelephoneEleve = $TelephoneEleve;

        return $this;
    }

    public function getAnneeDarrivee(): ?\DateTimeInterface
    {
        return $this->AnneeDarrivee;
    }

    public function setAnneeDarrivee(\DateTimeInterface $AnneeDarrivee): self
    {
        $this->AnneeDarrivee = $AnneeDarrivee;

        return $this;
    }

    public function getParentResident(): ?string
    {
        return $this->ParentResident;
    }

    public function setParentResident(string $ParentResident): self
    {
        $this->ParentResident = $ParentResident;

        return $this;
    }

    public function getAutreParentResident(): ?string
    {
        return $this->AutreParentResident;
    }

    public function setAutreParentResident(?string $AutreParentResident): self
    {
        $this->AutreParentResident = $AutreParentResident;

        return $this;
    }

    public function getPetitFrereOuSoeur(): ?string
    {
        return $this->PetitFrereOuSoeur;
    }

    public function setPetitFrereOuSoeur(?string $PetitFrereOuSoeur): self
    {
        $this->PetitFrereOuSoeur = $PetitFrereOuSoeur;

        return $this;
    }

    public function getFrereOuSoeur(): ?string
    {
        return $this->FrereOuSoeur;
    }

    public function setFrereOuSoeur(?string $FrereOuSoeur): self
    {
        $this->FrereOuSoeur = $FrereOuSoeur;

        return $this;
    }

    public function getPreferenceManuel(): ?string
    {
        return $this->PreferenceManuel;
    }

    public function setPreferenceManuel(string $PreferenceManuel): self
    {
        $this->PreferenceManuel = $PreferenceManuel;

        return $this;
    }

    public function getTolerenceParacetamol(): ?string
    {
        return $this->TolerenceParacetamol;
    }

    public function setTolerenceParacetamol(string $TolerenceParacetamol): self
    {
        $this->TolerenceParacetamol = $TolerenceParacetamol;

        return $this;
    }

    public function getMaladieSignale(): ?string
    {
        return $this->MaladieSignale;
    }

    public function setMaladieSignale(?string $MaladieSignale): self
    {
        $this->MaladieSignale = $MaladieSignale;

        return $this;
    }

    public function getCodeFamille(): ?int
    {
        return $this->CodeFamille;
    }

    public function setCodeFamille(int $CodeFamille): self
    {
        $this->CodeFamille = $CodeFamille;

        return $this;
    }
}
