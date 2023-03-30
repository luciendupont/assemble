<?php

namespace App\Entity;

use App\Repository\EcoloRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EcoloRepository::class)]
class Ecolo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nomEcolo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $preEcolo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $regEcolo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $depEcolo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $cirEcolo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $proEcolo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $groEcolo = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomEcolo(): ?string
    {
        return $this->nomEcolo;
    }

    public function setNomEcolo(?string $nomEcolo): self
    {
        $this->nomEcolo = $nomEcolo;

        return $this;
    }

    public function getPreEcolo(): ?string
    {
        return $this->preEcolo;
    }

    public function setPreEcolo(?string $preEcolo): self
    {
        $this->preEcolo = $preEcolo;

        return $this;
    }

    public function getRegEcolo(): ?string
    {
        return $this->regEcolo;
    }

    public function setRegEcolo(?string $regEcolo): self
    {
        $this->regEcolo = $regEcolo;

        return $this;
    }

    public function getDepEcolo(): ?string
    {
        return $this->depEcolo;
    }

    public function setDepEcolo(?string $depEcolo): self
    {
        $this->depEcolo = $depEcolo;

        return $this;
    }

    public function getCirEcolo(): ?string
    {
        return $this->cirEcolo;
    }

    public function setCirEcolo(?string $cirEcolo): self
    {
        $this->cirEcolo = $cirEcolo;

        return $this;
    }

    public function getProEcolo(): ?string
    {
        return $this->proEcolo;
    }

    public function setProEcolo(?string $proEcolo): self
    {
        $this->proEcolo = $proEcolo;

        return $this;
    }

    public function getGroEcolo(): ?string
    {
        return $this->groEcolo;
    }

    public function setGroEcolo(?string $groEcolo): self
    {
        $this->groEcolo = $groEcolo;

        return $this;
    }
}
