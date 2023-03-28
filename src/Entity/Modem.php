<?php

namespace App\Entity;

use App\Repository\ModemRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ModemRepository::class)]
class Modem
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column (name:"id_modem")]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nomModem = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $prenomModem = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $regionModem = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $depModem = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $circoModem = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $proModem = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $groModem = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomModem(): ?string
    {
        return $this->nomModem;
    }

    public function setNomModem(?string $nomModem): self
    {
        $this->nomModem = $nomModem;

        return $this;
    }

    public function getPrenomModem(): ?string
    {
        return $this->prenomModem;
    }

    public function setPrenomModem(?string $prenomModem): self
    {
        $this->prenomModem = $prenomModem;

        return $this;
    }

    public function getRegionModem(): ?string
    {
        return $this->regionModem;
    }

    public function setRegionModem(?string $regionModem): self
    {
        $this->regionModem = $regionModem;

        return $this;
    }

    public function getDepModem(): ?string
    {
        return $this->depModem;
    }

    public function setDepModem(?string $depModem): self
    {
        $this->depModem = $depModem;

        return $this;
    }

    public function getCircoModem(): ?string
    {
        return $this->circoModem;
    }

    public function setCircoModem(?string $circoModem): self
    {
        $this->circoModem = $circoModem;

        return $this;
    }

    public function getProModem(): ?string
    {
        return $this->proModem;
    }

    public function setProModem(?string $proModem): self
    {
        $this->proModem = $proModem;

        return $this;
    }

    public function getGroModem(): ?string
    {
        return $this->groModem;
    }

    public function setGroModem(?string $groModem): self
    {
        $this->groModem = $groModem;

        return $this;
    }
}
