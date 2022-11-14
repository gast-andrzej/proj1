<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\CARRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CARRepository::class)]
#[ApiResource]
class CAR
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $mark = null;

    #[ORM\Column]
    private ?int $price = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMark(): ?string
    {
        return $this->mark;
    }

    public function setMark(string $mark): self
    {
        $this->mark = $mark;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }
}
