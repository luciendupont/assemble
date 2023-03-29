<?php

namespace App\Entity;

use App\Repository\LiotRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LiotRepository::class)]
class Liot
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column (name:"id_liot")]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nomLiot = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $preLiot = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $regLiot = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $depLiot = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $cirLiot = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $proLiot = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $groLiot = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomLiot(): ?string
    {
        return $this->nomLiot;
    }

    public function setNomLiot(?string $nomLiot): self
    {
        $this->nomLiot = $nomLiot;

        return $this;
    }

    public function getPreLiot(): ?string
    {
        return $this->preLiot;
    }

    public function setPreLiot(?string $preLiot): self
    {
        $this->preLiot = $preLiot;

        return $this;
    }

    public function getRegLiot(): ?string
    {
        return $this->regLiot;
    }

    public function setRegLiot(?string $regLiot): self
    {
        $this->regLiot = $regLiot;

        return $this;
    }

    public function getDepLiot(): ?string
    {
        return $this->depLiot;
    }

    public function setDepLiot(?string $depLiot): self
    {
        $this->depLiot = $depLiot;

        return $this;
    }

    public function getCirLiot(): ?string
    {
        return $this->cirLiot;
    }

    public function setCirLiot(?string $cirLiot): self
    {
        $this->cirLiot = $cirLiot;

        return $this;
    }

    public function getProLiot(): ?string
    {
        return $this->proLiot;
    }

    public function setProLiot(?string $proLiot): self
    {
        $this->proLiot = $proLiot;

        return $this;
    }

    public function getGroLiot(): ?string
    {
        return $this->groLiot;
    }

    public function setGroLiot(?string $groLiot): self
    {
        $this->groLiot = $groLiot;

        return $this;
    }
}
