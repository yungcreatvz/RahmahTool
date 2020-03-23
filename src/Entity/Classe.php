<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ClasseRepository")*
 * @UniqueEntity(
 *     fields={"Classe"},
 *     message= "Cette classe existe déja dans la base")
 */

class Classe
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Classe;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\AnneeAcademique", inversedBy="classes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $AnneeAcademique;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Option", mappedBy="Classe")
     */
    private $options;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Eleve", mappedBy="classe")
     */
    private $eleve;

    public function __construct()
    {
        $this->options = new ArrayCollection();
        $this->eleve = new ArrayCollection();
    }



    public function getId(): ?int
    {
        return $this->id;
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

    public function getAnneeAcademique(): ?AnneeAcademique
    {
        return $this->AnneeAcademique;
    }

    public function setAnneeAcademique(?AnneeAcademique $AnneeAcademique): self
    {
        $this->AnneeAcademique = $AnneeAcademique;

        return $this;
    }

    /**
     * @return Collection|Option[]
     */
    public function getOptions(): Collection
    {
        return $this->options;
    }

    public function addOption(Option $option): self
    {
        if (!$this->options->contains($option)) {
            $this->options[] = $option;
            $option->setClasse($this);
        }

        return $this;
    }

    public function removeOption(Option $option): self
    {
        if ($this->options->contains($option)) {
            $this->options->removeElement($option);
            // set the owning side to null (unless already changed)
            if ($option->getClasse() === $this) {
                $option->setClasse(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Eleve[]
     */
    public function getEleve(): Collection
    {
        return $this->eleve;
    }

    public function addEleve(Eleve $eleve): self
    {
        if (!$this->eleve->contains($eleve)) {
            $this->eleve[] = $eleve;
            $eleve->setClasse($this);
        }

        return $this;
    }

    public function removeEleve(Eleve $eleve): self
    {
        if ($this->eleve->contains($eleve)) {
            $this->eleve->removeElement($eleve);
            // set the owning side to null (unless already changed)
            if ($eleve->getClasse() === $this) {
                $eleve->setClasse(null);
            }
        }

        return $this;
    }




}
