<?php

namespace App\Entity;

use App\Repository\DealsEntityRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DealsEntityRepository::class)]
class DealsEntity
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column]
    private ?int $price = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $creation_date = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $publication_date = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $last_update = null;

    #[ORM\Column(type: Types::ARRAY)]
    private array $id_image = [];

    #[ORM\Column]
    private ?int $author = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

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

    public function getCreationDate(): ?\DateTimeImmutable
    {
        return $this->creation_date;
    }

    public function setCreationDate(\DateTimeImmutable $creation_date): self
    {
        $this->creation_date = $creation_date;

        return $this;
    }

    public function getPublicationDate(): ?\DateTimeInterface
    {
        return $this->publication_date;
    }

    public function setPublicationDate(?\DateTimeInterface $publication_date): self
    {
        $this->publication_date = $publication_date;

        return $this;
    }

    public function getLastUpdate(): ?\DateTimeImmutable
    {
        return $this->last_update;
    }

    public function setLastUpdate(\DateTimeImmutable $last_update): self
    {
        $this->last_update = $last_update;

        return $this;
    }

    public function getIdImage(): array
    {
        return $this->id_image;
    }

    public function setIdImage(array $id_image): self
    {
        $this->id_image = $id_image;

        return $this;
    }

    public function getAuthor(): ?int
    {
        return $this->author;
    }

    public function setAuthor(int $author): self
    {
        $this->author = $author;

        return $this;
    }
}
