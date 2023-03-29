<?php

namespace App\Entity;

use App\Repository\LfiRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LfiRepository::class)]
class Lfi
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column (name:"id_lfi")]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nomLfi = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $prenomLfi = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $regLfi = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $depLfi = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $cirLfi = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $proLfi = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $groLfi = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomLfi(): ?string
    {
        return $this->nomLfi;
    }

    public function setNomLfi(?string $nomLfi): self
    {
        $this->nomLfi = $nomLfi;

        return $this;
    }

    public function getPrenomLfi(): ?string
    {
        return $this->prenomLfi;
    }

    public function setPrenomLfi(?string $prenomLfi): self
    {
        $this->prenomLfi = $prenomLfi;

        return $this;
    }

    public function getRegLfi(): ?string
    {
        return $this->regLfi;
    }

    public function setRegLfi(?string $regLfi): self
    {
        $this->regLfi = $regLfi;

        return $this;
    }

    public function getDepLfi(): ?string
    {
        return $this->depLfi;
    }

    public function setDepLfi(?string $depLfi): self
    {
        $this->depLfi = $depLfi;

        return $this;
    }

    public function getCirLfi(): ?string
    {
        return $this->cirLfi;
    }

    public function setCirLfi(?string $cirLfi): self
    {
        $this->cirLfi = $cirLfi;

        return $this;
    }

    public function getProLfi(): ?string
    {
        return $this->proLfi;
    }

    public function setProLfi(?string $proLfi): self
    {
        $this->proLfi = $proLfi;

        return $this;
    }

    public function getGroLfi(): ?string
    {
        return $this->groLfi;
    }

    public function setGroLfi(?string $groLfi): self
    {
        $this->groLfi = $groLfi;

        return $this;
    }
}
