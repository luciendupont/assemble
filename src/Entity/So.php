<?php

namespace App\Entity;

use App\Repository\SoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SoRepository::class)]
class So
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nomSo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $preSo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $regSo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $depSo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $cirSo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $proSo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $groSo = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomSo(): ?string
    {
        return $this->nomSo;
    }

    public function setNomSo(?string $nomSo): self
    {
        $this->nomSo = $nomSo;

        return $this;
    }

    public function getPreSo(): ?string
    {
        return $this->preSo;
    }

    public function setPreSo(?string $preSo): self
    {
        $this->preSo = $preSo;

        return $this;
    }

    public function getRegSo(): ?string
    {
        return $this->regSo;
    }

    public function setRegSo(?string $regSo): self
    {
        $this->regSo = $regSo;

        return $this;
    }

    public function getDepSo(): ?string
    {
        return $this->depSo;
    }

    public function setDepSo(?string $depSo): self
    {
        $this->depSo = $depSo;

        return $this;
    }

    public function getCirSo(): ?string
    {
        return $this->cirSo;
    }

    public function setCirSo(?string $cirSo): self
    {
        $this->cirSo = $cirSo;

        return $this;
    }

    public function getProSo(): ?string
    {
        return $this->proSo;
    }

    public function setProSo(?string $proSo): self
    {
        $this->proSo = $proSo;

        return $this;
    }

    public function getGroSo(): ?string
    {
        return $this->groSo;
    }

    public function setGroSo(?string $groSo): self
    {
        $this->groSo = $groSo;

        return $this;
    }
}
