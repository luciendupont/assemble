<?php

namespace App\Entity;

use App\Repository\GnupesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GnupesRepository::class)]
class Gnupes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name:"id_gnupes")]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nomGnupes = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $prenomGnupes = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $regionGnupes = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $depGnupes = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $cirGnupes = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $proGnupes = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $groGnupes = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomGnupes(): ?string
    {
        return $this->nomGnupes;
    }

    public function setNomGnupes(?string $nomGnupes): self
    {
        $this->nomGnupes = $nomGnupes;

        return $this;
    }

    public function getPrenomGnupes(): ?string
    {
        return $this->prenomGnupes;
    }

    public function setPrenomGnupes(?string $prenomGnupes): self
    {
        $this->prenomGnupes = $prenomGnupes;

        return $this;
    }

    public function getRegionGnupes(): ?string
    {
        return $this->regionGnupes;
    }

    public function setRegionGnupes(?string $regionGnupes): self
    {
        $this->regionGnupes = $regionGnupes;

        return $this;
    }

    public function getDepGnupes(): ?string
    {
        return $this->depGnupes;
    }

    public function setDepGnupes(?string $depGnupes): self
    {
        $this->depGnupes = $depGnupes;

        return $this;
    }

    public function getCirGnupes(): ?string
    {
        return $this->cirGnupes;
    }

    public function setCirGnupes(?string $cirGnupes): self
    {
        $this->cirGnupes = $cirGnupes;

        return $this;
    }

    public function getProGnupes(): ?string
    {
        return $this->proGnupes;
    }

    public function setProGnupes(?string $proGnupes): self
    {
        $this->proGnupes = $proGnupes;

        return $this;
    }

    public function getGroGnupes(): ?string
    {
        return $this->groGnupes;
    }

    public function setGroGnupes(?string $groGnupes): self
    {
        $this->groGnupes = $groGnupes;

        return $this;
    }
}
