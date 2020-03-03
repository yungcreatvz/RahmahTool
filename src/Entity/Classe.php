<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ClasseRepository")
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
     * @ORM\Column(type="text")
     */
    private $CM2;

    /**
     * @ORM\Column(type="text")
     */
    private $HIFZ1;

    /**
     * @ORM\Column(type="text")
     */
    private $HIFZ2;

    /**
     * @ORM\Column(type="text")
     */
    private $HIFZ3;

    /**
     * @ORM\Column(type="text")
     */
    private $HIFZ4;

    /**
     * @ORM\Column(type="text")
     */
    private $HIFZ5;

    /**
     * @ORM\Column(type="text")
     */
    private $MoyenneSection;

    /**
     * @ORM\Column(type="text")
     */
    private $PetiteSection;

    /**
     * @ORM\Column(type="text")
     */
    private $ToutePetiteSection;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCM2(): ?string
    {
        return $this->CM2;
    }

    public function setCM2(string $CM2): self
    {
        $this->CM2 = $CM2;

        return $this;
    }

    public function getHIFZ1(): ?string
    {
        return $this->HIFZ1;
    }

    public function setHIFZ1(string $HIFZ1): self
    {
        $this->HIFZ1 = $HIFZ1;

        return $this;
    }

    public function getHIFZ2(): ?string
    {
        return $this->HIFZ2;
    }

    public function setHIFZ2(string $HIFZ2): self
    {
        $this->HIFZ2 = $HIFZ2;

        return $this;
    }

    public function getHIFZ3(): ?string
    {
        return $this->HIFZ3;
    }

    public function setHIFZ3(string $HIFZ3): self
    {
        $this->HIFZ3 = $HIFZ3;

        return $this;
    }

    public function getHIFZ4(): ?string
    {
        return $this->HIFZ4;
    }

    public function setHIFZ4(string $HIFZ4): self
    {
        $this->HIFZ4 = $HIFZ4;

        return $this;
    }

    public function getHIFZ5(): ?string
    {
        return $this->HIFZ5;
    }

    public function setHIFZ5(string $HIFZ5): self
    {
        $this->HIFZ5 = $HIFZ5;

        return $this;
    }

    public function getMoyenneSection(): ?string
    {
        return $this->MoyenneSection;
    }

    public function setMoyenneSection(string $MoyenneSection): self
    {
        $this->MoyenneSection = $MoyenneSection;

        return $this;
    }

    public function getPetiteSection(): ?string
    {
        return $this->PetiteSection;
    }

    public function setPetiteSection(string $PetiteSection): self
    {
        $this->PetiteSection = $PetiteSection;

        return $this;
    }

    public function getToutePetiteSection(): ?string
    {
        return $this->ToutePetiteSection;
    }

    public function setToutePetiteSection(string $ToutePetiteSection): self
    {
        $this->ToutePetiteSection = $ToutePetiteSection;

        return $this;
    }
}
