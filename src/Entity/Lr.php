<?php

namespace App\Entity;

use App\Repository\LrRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LrRepository::class)]
class Lr
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column (name:"id_lr")]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nomLr = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $prenomLr = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $regLr = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $depLr = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $cirLr = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $proLr = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $groLr = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomLr(): ?string
    {
        return $this->nomLr;
    }

    public function setNomLr(?string $nomLr): self
    {
        $this->nomLr = $nomLr;

        return $this;
    }

    public function getPrenomLr(): ?string
    {
        return $this->prenomLr;
    }

    public function setPrenomLr(?string $prenomLr): self
    {
        $this->prenomLr = $prenomLr;

        return $this;
    }

    public function getRegLr(): ?string
    {
        return $this->regLr;
    }

    public function setRegLr(?string $regLr): self
    {
        $this->regLr = $regLr;

        return $this;
    }

    public function getDepLr(): ?string
    {
        return $this->depLr;
    }

    public function setDepLr(?string $depLr): self
    {
        $this->depLr = $depLr;

        return $this;
    }

    public function getCirLr(): ?string
    {
        return $this->cirLr;
    }

    public function setCirLr(?string $cirLr): self
    {
        $this->cirLr = $cirLr;

        return $this;
    }

    public function getProLr(): ?string
    {
        return $this->proLr;
    }

    public function setProLr(?string $proLr): self
    {
        $this->proLr = $proLr;

        return $this;
    }

    public function getGroLr(): ?string
    {
        return $this->groLr;
    }

    public function setGroLr(?string $groLr): self
    {
        $this->groLr = $groLr;

        return $this;
    }
}
