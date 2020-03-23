<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OptionRepository")
 */
class Option
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
    private $Options;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;


    /**
     * @ORM\Column(type="integer")
     */
    private $montant;



    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Classe", inversedBy="options")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Classe;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Eleve", mappedBy="Options")
     */
    private $Eleves;

    public function __construct()
    {
        $this->Eleves = new ArrayCollection();
    }






    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOptions(): ?string
    {
        return $this->Options;
    }

    public function setOptions(string $Options): self
    {
        $this->Options = $Options;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getMontant(): ?int
    {
        return $this->montant;
    }

    public function setMontant(int $montant): self
    {
        $this->montant = $montant;

        return $this;
    }


    public function getClasse(): ?Classe
    {
        return $this->Classe;
    }

    public function setClasse(?Classe $Classe): self
    {
        $this->Classe = $Classe;

        return $this;
    }

    /**
     * @return Collection|Eleve[]
     */
    public function getEleves(): Collection
    {
        return $this->Eleves;
    }

    public function addElefe(Eleve $elefe): self
    {
        if (!$this->Eleves->contains($elefe)) {
            $this->Eleves[] = $elefe;
            $elefe->addOption($this);
        }

        return $this;
    }

    public function removeElefe(Eleve $elefe): self
    {
        if ($this->Eleves->contains($elefe)) {
            $this->Eleves->removeElement($elefe);
            $elefe->removeOption($this);
        }

        return $this;
    }



}
