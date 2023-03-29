<?php

namespace App\Entity;

use App\Repository\HorRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HorRepository::class)]
class Hor
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column (name:"id_hor")]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nomHor = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $prenomHor = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $regHor = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $depHor = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $cirHor = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $proHor = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $groHor = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomHor(): ?string
    {
        return $this->nomHor;
    }

    public function setNomHor(?string $nomHor): self
    {
        $this->nomHor = $nomHor;

        return $this;
    }

    public function getPrenomHor(): ?string
    {
        return $this->prenomHor;
    }

    public function setPrenomHor(?string $prenomHor): self
    {
        $this->prenomHor = $prenomHor;

        return $this;
    }

    public function getRegHor(): ?string
    {
        return $this->regHor;
    }

    public function setRegHor(?string $regHor): self
    {
        $this->regHor = $regHor;

        return $this;
    }

    public function getDepHor(): ?string
    {
        return $this->depHor;
    }

    public function setDepHor(?string $depHor): self
    {
        $this->depHor = $depHor;

        return $this;
    }

    public function getCirHor(): ?string
    {
        return $this->cirHor;
    }

    public function setCirHor(?string $cirHor): self
    {
        $this->cirHor = $cirHor;

        return $this;
    }

    public function getProHor(): ?string
    {
        return $this->proHor;
    }

    public function setProHor(?string $proHor): self
    {
        $this->proHor = $proHor;

        return $this;
    }

    public function getGroHor(): ?string
    {
        return $this->groHor;
    }

    public function setGroHor(?string $groHor): self
    {
        $this->groHor = $groHor;

        return $this;
    }
}
