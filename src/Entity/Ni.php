<?php

namespace App\Entity;

use App\Repository\NiRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NiRepository::class)]
class Ni
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column (name:"id_ni")]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nomNi = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $preNi = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $regNi = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $depNi = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $cirNi = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $proNi = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $groNi = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomi(): ?string
    {
        return $this->nomNi;
    }

    public function setNomNi(?string $nomNi): self
    {
        $this->nomNi = $nomNi;

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

    public function getRegNi(): ?string
    {
        return $this->regNi;
    }

    public function setRegNi(?string $regNi): self
    {
        $this->regNi = $regNi;

        return $this;
    }

    public function getDepNi(): ?string
    {
        return $this->depNi;
    }

    public function setDepNi(?string $depNi): self
    {
        $this->depNi = $depNi;

        return $this;
    }

    public function getCirNi(): ?string
    {
        return $this->cirNi;
    }

    public function setCirNi(?string $cirNi): self
    {
        $this->cirNi = $cirNi;

        return $this;
    }

    public function getProNi(): ?string
    {
        return $this->proNi;
    }

    public function setProNi(?string $proNi): self
    {
        $this->proNi = $proNi;

        return $this;
    }

    public function getGroNi(): ?string
    {
        return $this->groNi;
    }

    public function setGroNi(?string $groNi): self
    {
        $this->groNi = $groNi;

        return $this;
    }
}
