<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/** An Ingredient */
#[ORM\Entity]
#[ApiResource]
class Ingredient
{
  #[ORM\Id, ORM\Column, ORM\GeneratedValue]
  private ?int $id = null;

  #[ORM\Column]
  #[Assert\NotBlank]
  public string $name = "";

  #[ORM\Column(type: 'integer')]
  #[Assert\PositiveOrZero]
  public int $kcal = 0;

  #[ORM\Column]
  #[Assert\NotBlank]
  public string $typeOf = "";

  #[ORM\Column]
  #[Assert\NotBlank]
  public ?\DateTimeImmutable $publicationDate = null;

  public function getId(): ?int
  {
    return $this->id;
  }
}