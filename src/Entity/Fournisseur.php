<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FournisseurRepository")
 */
class Fournisseur
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
    private $nomfourn;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $numerotel;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    // /**
    //  * @ORM\Column(type="string", length=255)
    //  */
    // private $username;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $bp;

    /**
     * @ORM\Column(type="integer")
     */
    private $numerocom;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomfourn(): ?string
    {
        return $this->nomfourn;
    }

    public function setNomfourn(string $nomfourn): self
    {
        $this->nomfourn = $nomfourn;

        return $this;
    }

    public function getNumerotel(): ?string
    {
        return $this->numerotel;
    }

    public function setNumerotel(string $numerotel): self
    {
        $this->numerotel = $numerotel;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    // public function getUsername(): ?string
    // {
    //     return $this->username;
    // }

    // public function setUsername(string $username): self
    // {
    //     $this->username = $username;

    //     return $this;
    // }

    public function getBp(): ?string
    {
        return $this->bp;
    }

    public function setBp(string $bp): self
    {
        $this->bp = $bp;

        return $this;
    }

    public function getNumerocom(): ?int
    {
        return $this->numerocom;
    }

    public function setNumerocom(int $numerocom): self
    {
        $this->numerocom = $numerocom;

        return $this;
    }
}
