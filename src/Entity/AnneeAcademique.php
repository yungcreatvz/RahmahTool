<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass="App\Repository\AnneeAcademiqueRepository")
 * @UniqueEntity(
 *     fields={"AnneeAcademique"},
 *     message= "Cette année Académique est déja répertorié")
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
     * @ORM\Column(type="string", length=255)
     */
    private $AnneeAcademique;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Classe", mappedBy="AnneeAcademique")
     */
    private $classes;

    public function __construct()
    {
        $this->classes = new ArrayCollection();
    }



    public function getId(): ?int
    {
        return $this->id;
    }


    public function getAnneeAcademique(): ?string
    {
        return $this->AnneeAcademique;
    }

    public function setAnneeAcademique(string $AnneeAcademique): self
    {
        $this->AnneeAcademique = $AnneeAcademique;

        return $this;
    }

    /**
     * @return Collection|Classe[]
     */
    public function getClasses(): Collection
    {
        return $this->classes;
    }

    public function addClass(Classe $class): self
    {
        if (!$this->classes->contains($class)) {
            $this->classes[] = $class;
            $class->setAnneeAcademique($this);
        }

        return $this;
    }

    public function removeClass(Classe $class): self
    {
        if ($this->classes->contains($class)) {
            $this->classes->removeElement($class);
            // set the owning side to null (unless already changed)
            if ($class->getAnneeAcademique() === $this) {
                $class->setAnneeAcademique(null);
            }
        }

        return $this;
    }

}
