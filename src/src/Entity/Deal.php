<?php

namespace App\Entity;

use App\Repository\DealRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DealRepository::class)]
class Deal
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $Price = null;

    #[ORM\Column(length: 255)]
    private ?string $Title = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Description = null;

    #[ORM\Column(length: 255)]
    private ?string $Photo = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $Date_creation = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $Date_publication = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $Date_update = null;

    #[ORM\Column]
    private ?bool $Is_sold = null;

    #[ORM\Column]
    private ?bool $Is_published = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $Date_purchase = null;

    #[ORM\ManyToOne(inversedBy: 'Deals')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $Seller = null;

    #[ORM\ManyToOne(inversedBy: 'Purchases')]
    private ?User $Buyer = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Category $Category = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?State $Product_state = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrice(): ?int
    {
        return $this->Price;
    }

    public function setPrice(int $Price): self
    {
        $this->Price = $Price;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->Title;
    }

    public function setTitle(string $Title): self
    {
        $this->Title = $Title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->Photo;
    }

    public function setPhoto(string $Photo): self
    {
        $this->Photo = $Photo;

        return $this;
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

    public function getDatePublication(): ?\DateTimeInterface
    {
        return $this->Date_publication;
    }

    public function setDatePublication(?\DateTimeInterface $Date_publication): self
    {
        $this->Date_publication = $Date_publication;

        return $this;
    }

    public function getDateUpdate(): ?\DateTimeInterface
    {
        return $this->Date_update;
    }

    public function setDateUpdate(?\DateTimeInterface $Date_update): self
    {
        $this->Date_update = $Date_update;

        return $this;
    }

    public function isIsSold(): ?bool
    {
        return $this->Is_sold;
    }

    public function setIsSold(bool $Is_sold): self
    {
        $this->Is_sold = $Is_sold;

        return $this;
    }

    public function isIsPublished(): ?bool
    {
        return $this->Is_published;
    }

    public function setIsPublished(bool $Is_published): self
    {
        $this->Is_published = $Is_published;

        return $this;
    }

    public function getDatePurchase(): ?\DateTimeInterface
    {
        return $this->Date_purchase;
    }

    public function setDatePurchase(?\DateTimeInterface $Date_purchase): self
    {
        $this->Date_purchase = $Date_purchase;

        return $this;
    }

    public function getSeller(): ?User
    {
        return $this->Seller;
    }

    public function setSeller(?User $Seller): self
    {
        $this->Seller = $Seller;

        return $this;
    }

    public function getBuyer(): ?User
    {
        return $this->Buyer;
    }

    public function setBuyer(?User $Buyer): self
    {
        $this->Buyer = $Buyer;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->Category;
    }

    public function setCategory(?Category $Category): self
    {
        $this->Category = $Category;

        return $this;
    }

    public function getProductState(): ?State
    {
        return $this->Product_state;
    }

    public function setProductState(?State $Product_state): self
    {
        $this->Product_state = $Product_state;

        return $this;
    }
    
    public function __toString(): string {
        return $this->Product_state;
    }
}
