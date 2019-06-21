<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArticleRepository")
 */
class Article
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
    private $nomarticle;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $designation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $quantitemin;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomarticle(): ?string
    {
        return $this->nomarticle;
    }

    public function setNomarticle(string $nomarticle): self
    {
        $this->nomarticle = $nomarticle;

        return $this;
    }

    public function getDesignation(): ?string
    {
        return $this->designation;
    }

    public function setDesignation(string $designation): self
    {
        $this->designation = $designation;

        return $this;
    }

    public function getQuantitemin(): ?string
    {
        return $this->quantitemin;
    }

    public function setQuantitemin(string $quantitemin): self
    {
        $this->quantitemin = $quantitemin;

        return $this;
    }
}
