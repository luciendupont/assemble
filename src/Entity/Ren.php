<?php

namespace App\Entity;

use App\Repository\RenRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RenRepository::class)]
class Ren
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column (name:"id_ren")]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nomRen = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $preRen = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $regRen = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $depRen = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $cirRen = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $proRen = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $groRen = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomRen(): ?string
    {
        return $this->nomRen;
    }

    public function setNomRen(?string $nomRen): self
    {
        $this->nomRen = $nomRen;

        return $this;
    }

    public function getPreRen(): ?string
    {
        return $this->preRen;
    }

    public function setPreRen(?string $preRen): self
    {
        $this->preRen = $preRen;

        return $this;
    }

    public function getRegRen(): ?string
    {
        return $this->regRen;
    }

    public function setRegRen(?string $regRen): self
    {
        $this->regRen = $regRen;

        return $this;
    }

    public function getDepRen(): ?string
    {
        return $this->depRen;
    }

    public function setDepRen(?string $depRen): self
    {
        $this->depRen = $depRen;

        return $this;
    }

    public function getCirRen(): ?string
    {
        return $this->cirRen;
    }

    public function setCirRen(?string $cirRen): self
    {
        $this->cirRen = $cirRen;

        return $this;
    }

    public function getProRen(): ?string
    {
        return $this->proRen;
    }

    public function setProRen(?string $proRen): self
    {
        $this->proRen = $proRen;

        return $this;
    }

    public function getGroRen(): ?string
    {
        return $this->groRen;
    }

    public function setGroRen(?string $groRen): self
    {
        $this->groRen = $groRen;

        return $this;
    }
}
