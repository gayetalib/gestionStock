<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DirectionRepository")
 */
class Direction
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
    private $Nomdirection;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomdirection(): ?string
    {
        return $this->Nomdirection;
    }

    public function setNomdirection(string $Nomdirection): self
    {
        $this->Nomdirection = $Nomdirection;

        return $this;
    }
}
