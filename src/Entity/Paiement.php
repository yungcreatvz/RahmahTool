<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PaiementRepository")
 */
class Paiement
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $CodeFamille;

    /**
     * @ORM\Column(type="integer")
     */
    private $Matricule;

    /**
     * @ORM\Column(type="integer")
     */
    private $NumeroDeRecu;

    /**
     * @ORM\Column(type="date")
     */
    private $Date;

    /**
     * @ORM\Column(type="date")
     */
    private $Mois;

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
    private $Classe;

    /**
     * @ORM\Column(type="integer")
     */
    private $NumeroFacture;

    /**
     * @ORM\Column(type="text")
     */
    private $Methode;

    /**
     * @ORM\Column(type="integer")
     */
    private $Montant;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getMatricule(): ?int
    {
        return $this->Matricule;
    }

    public function setMatricule(int $Matricule): self
    {
        $this->Matricule = $Matricule;

        return $this;
    }

    public function getNumeroDeRecu(): ?int
    {
        return $this->NumeroDeRecu;
    }

    public function setNumeroDeRecu(int $NumeroDeRecu): self
    {
        $this->NumeroDeRecu = $NumeroDeRecu;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->Date;
    }

    public function setDate(\DateTimeInterface $Date): self
    {
        $this->Date = $Date;

        return $this;
    }

    public function getMois(): ?\DateTimeInterface
    {
        return $this->Mois;
    }

    public function setMois(\DateTimeInterface $Mois): self
    {
        $this->Mois = $Mois;

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

    public function getClasse(): ?string
    {
        return $this->Classe;
    }

    public function setClasse(string $Classe): self
    {
        $this->Classe = $Classe;

        return $this;
    }

    public function getNumeroFacture(): ?int
    {
        return $this->NumeroFacture;
    }

    public function setNumeroFacture(int $NumeroFacture): self
    {
        $this->NumeroFacture = $NumeroFacture;

        return $this;
    }

    public function getMethode(): ?string
    {
        return $this->Methode;
    }

    public function setMethode(string $Methode): self
    {
        $this->Methode = $Methode;

        return $this;
    }

    public function getMontant(): ?int
    {
        return $this->Montant;
    }

    public function setMontant(int $Montant): self
    {
        $this->Montant = $Montant;

        return $this;
    }
}
