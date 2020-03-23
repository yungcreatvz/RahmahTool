<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ParentsRepository")
 */
class Parents
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
     * @ORM\Column(type="text")
     */
    private $PrenomParent;

    /**
     * @ORM\Column(type="text")
     */
    private $NomParent;

    /**
     * @ORM\Column(type="text")
     */
    private $SecteurDactivite;

    /**
     * @ORM\Column(type="text")
     */
    private $Profession;

    /**
     * @ORM\Column(type="integer")
     */
    private $TelephonePortable1;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $TelephonePortable2;

    /**
     * @ORM\Column(type="integer", nullable=true)
     *
     */
    private $TelephoneBureau;

    /**
     * @ORM\Column(type="integer")
     */
    private $TelephoneFixeMaison;

    /**
     * @ORM\Column(type="text")
     */
    private $Email;

    /**
     * @ORM\Column(type="text")
     */
    private $Adresse;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Eleve", inversedBy="Parent")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Eleve;


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

    public function getPrenomParent(): ?string
    {
        return $this->PrenomParent;
    }

    public function setPrenomParent(string $PrenomParent): self
    {
        $this->PrenomParent = $PrenomParent;

        return $this;
    }

    public function getNomParent(): ?string
    {
        return $this->NomParent;
    }

    public function setNomParent(string $NomParent): self
    {
        $this->NomParent = $NomParent;

        return $this;
    }

    public function getSecteurDactivite(): ?string
    {
        return $this->SecteurDactivite;
    }

    public function setSecteurDactivite(string $SecteurDactivite): self
    {
        $this->SecteurDactivite = $SecteurDactivite;

        return $this;
    }

    public function getProfession(): ?string
    {
        return $this->Profession;
    }

    public function setProfession(string $Profession): self
    {
        $this->Profession = $Profession;

        return $this;
    }

    public function getTelephonePortable1(): ?int
    {
        return $this->TelephonePortable1;
    }

    public function setTelephonePortable1(int $TelephonePortable1): self
    {
        $this->TelephonePortable1 = $TelephonePortable1;

        return $this;
    }

    public function getTelephonePortable2(): ?int
    {
        return $this->TelephonePortable2;
    }

    public function setTelephonePortable2(?int $TelephonePortable2): self
    {
        $this->TelephonePortable2 = $TelephonePortable2;

        return $this;
    }

    public function getTelephoneBureau(): ?int
    {
        return $this->TelephoneBureau;
    }

    public function setTelephoneBureau(?int $TelephoneBureau): self
    {
        $this->TelephoneBureau = $TelephoneBureau;

        return $this;
    }

    public function getTelephoneFixeMaison(): ?int
    {
        return $this->TelephoneFixeMaison;
    }

    public function setTelephoneFixeMaison(int $TelephoneFixeMaison): self
    {
        $this->TelephoneFixeMaison = $TelephoneFixeMaison;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->Adresse;
    }

    public function setAdresse(string $Adresse): self
    {
        $this->Adresse = $Adresse;

        return $this;
    }

    public function getEleve(): ?Eleve
    {
        return $this->Eleve;
    }

    public function setEleve(?Eleve $Eleve): self
    {
        $this->Eleve = $Eleve;

        return $this;
    }




}
