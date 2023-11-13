<?php

namespace App\Entity;

use App\Repository\AnimalBatchRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AnimalBatchRepository::class)]
class AnimalBatch
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $especeAnimalBatch = null;

    #[ORM\Column(length: 255)]
    private ?string $sexeRation = null;

    #[ORM\Column]
    private ?float $poidsmaxRation = null;

    #[ORM\Column]
    private ?float $poidsminRation = null;

    #[ORM\Column(length: 255)]
    private ?string $ageAnimalBatch = null;

    #[ORM\Column]
    private ?int $nombreAnimalBatch = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEspeceAnimalBatch(): ?string
    {
        return $this->especeAnimalBatch;
    }

    public function setEspeceAnimalBatch(string $especeAnimalBatch): static
    {
        $this->especeAnimalBatch = $especeAnimalBatch;

        return $this;
    }

    public function getSexeRation(): ?string
    {
        return $this->sexeRation;
    }

    public function setSexeRation(string $sexeRation): static
    {
        $this->sexeRation = $sexeRation;

        return $this;
    }

    public function getPoidsmaxRation(): ?float
    {
        return $this->poidsmaxRation;
    }

    public function setPoidsmaxRation(float $poidsmaxRation): static
    {
        $this->poidsmaxRation = $poidsmaxRation;

        return $this;
    }

    public function getPoidsminRation(): ?float
    {
        return $this->poidsminRation;
    }

    public function setPoidsminRation(float $poidsminRation): static
    {
        $this->poidsminRation = $poidsminRation;

        return $this;
    }

    public function getAgeAnimalBatch(): ?string
    {
        return $this->ageAnimalBatch;
    }

    public function setAgeAnimalBatch(string $ageAnimalBatch): static
    {
        $this->ageAnimalBatch = $ageAnimalBatch;

        return $this;
    }

    public function getNombreAnimalBatch(): ?int
    {
        return $this->nombreAnimalBatch;
    }

    public function setNombreAnimalBatch(int $nombreAnimalBatch): static
    {
        $this->nombreAnimalBatch = $nombreAnimalBatch;

        return $this;
    }
}
