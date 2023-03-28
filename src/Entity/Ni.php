<?php

namespace App\Entity;

use App\Repository\NiRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NiRepository::class)]
class Ni
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nomLi = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $preNi = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $regLi = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $depLi = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $cirLi = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $proLi = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $groLi = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomLi(): ?string
    {
        return $this->nomLi;
    }

    public function setNomLi(?string $nomLi): self
    {
        $this->nomLi = $nomLi;

        return $this;
    }

    public function getPreNi(): ?string
    {
        return $this->preNi;
    }

    public function setPreNi(?string $preNi): self
    {
        $this->preNi = $preNi;

        return $this;
    }

    public function getRegLi(): ?string
    {
        return $this->regLi;
    }

    public function setRegLi(?string $regLi): self
    {
        $this->regLi = $regLi;

        return $this;
    }

    public function getDepLi(): ?string
    {
        return $this->depLi;
    }

    public function setDepLi(?string $depLi): self
    {
        $this->depLi = $depLi;

        return $this;
    }

    public function getCirLi(): ?string
    {
        return $this->cirLi;
    }

    public function setCirLi(?string $cirLi): self
    {
        $this->cirLi = $cirLi;

        return $this;
    }

    public function getProLi(): ?string
    {
        return $this->proLi;
    }

    public function setProLi(?string $proLi): self
    {
        $this->proLi = $proLi;

        return $this;
    }

    public function getGroLi(): ?string
    {
        return $this->groLi;
    }

    public function setGroLi(?string $groLi): self
    {
        $this->groLi = $groLi;

        return $this;
    }
}
