<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AnneeAcademiqueRepository")
 */
class AnneeAcademique
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
    private $N;

    /**
     * @ORM\Column(type="date")
     */
    private $AnneeAcademique;

    /**
     * @ORM\Column(type="integer")
     */
    private $Matricule;

    /**
     * @ORM\Column(type="text")
     */
    private $Classe;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getN(): ?int
    {
        return $this->N;
    }

    public function setN(int $N): self
    {
        $this->N = $N;

        return $this;
    }

    public function getAnneeAcademique(): ?\DateTimeInterface
    {
        return $this->AnneeAcademique;
    }

    public function setAnneeAcademique(\DateTimeInterface $AnneeAcademique): self
    {
        $this->AnneeAcademique = $AnneeAcademique;

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

    public function getClasse(): ?string
    {
        return $this->Classe;
    }

    public function setClasse(string $Classe): self
    {
        $this->Classe = $Classe;

        return $this;
    }
}
