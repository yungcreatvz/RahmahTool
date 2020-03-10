<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AbonnementServicesRepository")
 */
class AbonnementServices
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Gouter;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Cantine;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Assurance;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Kimono;

    /**
     * @ORM\Column(type="text")
     */
    private $ZoneDeTranport;

    /**
     * @ORM\Column(type="integer")
     */
    private $TauxDeTransport;

    /**
     * @ORM\Column(type="boolean")
     */
    private $SurvetementEPS;

    /**
     * @ORM\Column(type="boolean")
     */
    private $TeeshirtEPS;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Blouse;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Bonnets;

    /**
     * @ORM\Column(type="boolean")
     */
    private $CoursDuSoir;

    /**
     * @ORM\Column(type="boolean")
     */
    private $PenaliteRetard;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Taekwando;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGouter(): ?bool
    {
        return $this->Gouter;
    }

    public function setGouter(bool $Gouter): self
    {
        $this->Gouter = $Gouter;

        return $this;
    }

    public function getCantine(): ?bool
    {
        return $this->Cantine;
    }

    public function setCantine(bool $Cantine): self
    {
        $this->Cantine = $Cantine;

        return $this;
    }

    public function getAssurance(): ?bool
    {
        return $this->Assurance;
    }

    public function setAssurance(bool $Assurance): self
    {
        $this->Assurance = $Assurance;

        return $this;
    }

    public function getKimono(): ?bool
    {
        return $this->Kimono;
    }

    public function setKimono(bool $Kimono): self
    {
        $this->Kimono = $Kimono;

        return $this;
    }

    public function getZoneDeTranport(): ?string
    {
        return $this->ZoneDeTranport;
    }

    public function setZoneDeTranport(string $ZoneDeTranport): self
    {
        $this->ZoneDeTranport = $ZoneDeTranport;

        return $this;
    }

    public function getTauxDeTransport(): ?int
    {
        return $this->TauxDeTransport;
    }

    public function setTauxDeTransport(int $TauxDeTransport): self
    {
        $this->TauxDeTransport = $TauxDeTransport;

        return $this;
    }

    public function getSurvetementEPS(): ?bool
    {
        return $this->SurvetementEPS;
    }

    public function setSurvetementEPS(bool $SurvetementEPS): self
    {
        $this->SurvetementEPS = $SurvetementEPS;

        return $this;
    }

    public function getTeeshirtEPS(): ?bool
    {
        return $this->TeeshirtEPS;
    }

    public function setTeeshirtEPS(bool $TeeshirtEPS): self
    {
        $this->TeeshirtEPS = $TeeshirtEPS;

        return $this;
    }

    public function getBlouse(): ?bool
    {
        return $this->Blouse;
    }

    public function setBlouse(bool $Blouse): self
    {
        $this->Blouse = $Blouse;

        return $this;
    }

    public function getBonnets(): ?bool
    {
        return $this->Bonnets;
    }

    public function setBonnets(bool $Bonnets): self
    {
        $this->Bonnets = $Bonnets;

        return $this;
    }

    public function getCoursDuSoir(): ?bool
    {
        return $this->CoursDuSoir;
    }

    public function setCoursDuSoir(bool $CoursDuSoir): self
    {
        $this->CoursDuSoir = $CoursDuSoir;

        return $this;
    }

    public function getPenaliteRetard(): ?text
    {
        return $this->PenaliteRetard;
    }

    public function setPenaliteRetard(bool $PenaliteRetard): self
    {
        $this->PenaliteRetard = $PenaliteRetard;

        return $this;
    }

    public function getTaekwando(): ?bool
    {
        return $this->Taekwando;
    }

    public function setTaekwando(bool $Taekwando): self
    {
        $this->Taekwando = $Taekwando;

        return $this;
    }
}
