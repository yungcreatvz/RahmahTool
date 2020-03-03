<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CM2Repository")
 */
class CM2
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
     * @ORM\Column(type="integer")
     */
    private $AnneeAcademique;

    /**
     * @ORM\Column(type="integer")
     */
    private $Matricule;

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

    public function getAnneeAcademique(): ?int
    {
        return $this->AnneeAcademique;
    }

    public function setAnneeAcademique(int $AnneeAcademique): self
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
}
