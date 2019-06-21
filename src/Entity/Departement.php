<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DepartementRepository")
 */
class Departement
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
    private $Nomdepartement;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Direction")
     * @ORM\JoinColumn(nullable=false)
     */
    private $direction;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomdepartement(): ?string
    {
        return $this->Nomdepartement;
    }

    public function setNomdepartement(string $Nomdepartement): self
    {
        $this->Nomdepartement = $Nomdepartement;

        return $this;
    }

    public function getDirection(): ?Direction
    {
        return $this->direction;
    }

    public function setDirection(?Direction $direction): self
    {
        $this->direction = $direction;

        return $this;
    }
}
