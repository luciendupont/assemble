<?php

namespace App\Entity;

use App\Repository\RnRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RnRepository::class)]
class Rn
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column (name:"id_rn")]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nomRn = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $preRn = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $regRn = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $depRn = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $cirRn = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $proRn = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $groRn = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomRn(): ?string
    {
        return $this->nomRn;
    }

    public function setNomRn(?string $nomRn): self
    {
        $this->nomRn = $nomRn;

        return $this;
    }

    public function getPreRn(): ?string
    {
        return $this->preRn;
    }

    public function setPreRn(?string $preRn): self
    {
        $this->preRn = $preRn;

        return $this;
    }

    public function getRegRn(): ?string
    {
        return $this->regRn;
    }

    public function setRegRn(?string $regRn): self
    {
        $this->regRn = $regRn;

        return $this;
    }

    public function getDepRn(): ?string
    {
        return $this->depRn;
    }

    public function setDepRn(?string $depRn): self
    {
        $this->depRn = $depRn;

        return $this;
    }

    public function getCirRn(): ?string
    {
        return $this->cirRn;
    }

    public function setCirRn(?string $cirRn): self
    {
        $this->cirRn = $cirRn;

        return $this;
    }

    public function getProRn(): ?string
    {
        return $this->proRn;
    }

    public function setProRn(?string $proRn): self
    {
        $this->proRn = $proRn;

        return $this;
    }

    public function getGroRn(): ?string
    {
        return $this->groRn;
    }

    public function setGroRn(?string $groRn): self
    {
        $this->groRn = $groRn;

        return $this;
    }
}
