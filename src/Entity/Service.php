<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ServiceRepository")
 */
class Service
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $NomService;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $NomDepartement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $NomDirection;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomService(): ?string
    {
        return $this->NomService;
    }

    public function setNomService(string $NomService): self
    {
        $this->NomService = $NomService;

        return $this;
    }

    public function getNomDepartement(): ?string
    {
        return $this->NomDepartement;
    }

    public function setNomDepartement(string $NomDepartement): self
    {
        $this->NomDepartement = $NomDepartement;

        return $this;
    }

    public function getNomDirection(): ?string
    {
        return $this->NomDirection;
    }

    public function setNomDirection(string $NomDirection): self
    {
        $this->NomDirection = $NomDirection;

        return $this;
    }
}
