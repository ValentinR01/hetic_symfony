<?php

namespace App\Entity;

use App\Repository\CommentRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommentRepository::class)]
class Comment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $Date_creation = null;

    #[ORM\Column]
    private ?int $Deal_id = null;

    #[ORM\Column]
    private ?int $User_id = null;

    #[ORM\Column(nullable: true)]
    private ?int $Parent_id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Content = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->Date_creation;
    }

    public function setDateCreation(\DateTimeInterface $Date_creation): self
    {
        $this->Date_creation = $Date_creation;

        return $this;
    }

    public function getDealId(): ?int
    {
        return $this->Deal_id;
    }

    public function setDealId(int $Deal_id): self
    {
        $this->Deal_id = $Deal_id;

        return $this;
    }

    public function getUserId(): ?int
    {
        return $this->User_id;
    }

    public function setUserId(int $User_id): self
    {
        $this->User_id = $User_id;

        return $this;
    }

    public function getParentId(): ?int
    {
        return $this->Parent_id;
    }

    public function setParentId(?int $Parent_id): self
    {
        $this->Parent_id = $Parent_id;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->Content;
    }

    public function setContent(string $Content): self
    {
        $this->Content = $Content;

        return $this;
    }
}
