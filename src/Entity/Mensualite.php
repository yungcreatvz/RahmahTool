<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MensualiteRepository")
 */
class Mensualite
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
    private $Mois;

    /**
     * @ORM\Column(type="integer")
     */
    private $Montant;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMois(): ?string
    {
        return $this->Mois;
    }

    public function setMois(string $Mois): self
    {
        $this->Mois = $Mois;

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
