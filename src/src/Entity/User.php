<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


#[ORM\Entity(repositoryClass: UserRepository::class)]
#[UniqueEntity('Email', 'Cet email est déjà utilisé')]
#[UniqueEntity('Pseudo', 'Ce pseudo est déjà utilisé')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 30)]
    private ?string $Pseudo = null;

    #[ORM\Column(length: 255)]
    #[Assert\Email(
        message: 'The email {{ value }} is not a valid email.',
    )]
    private ?string $Email = null;

    #[ORM\Column(nullable: true)]
    private ?int $Nb_user_likes = 0;

    #[ORM\Column(nullable: true)]
    private ?int $Nb_user_dislikes = 0;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Photo = null;

    #[ORM\Column(length: 255)]
    private ?string $Password = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $Bought_other_users_pseudo = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $Bought_other_users_id = null;

    #[ORM\OneToMany(mappedBy: 'Seller', targetEntity: Deal::class)]
    private Collection $Deals;

    #[ORM\OneToMany(mappedBy: 'Buyer', targetEntity: Deal::class)]
    private Collection $Purchases;

    public function __construct()
    {
        $this->Deals = new ArrayCollection();
        $this->Purchases = new ArrayCollection();
    }

    public function __toString()
    {
        return (string) $this->getPseudo();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPseudo(): ?string
    {
        return $this->Pseudo;
    }

    public function setPseudo(string $Pseudo): self
    {
        $this->Pseudo = $Pseudo;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    public function getNbUserLikes(): ?int
    {
        return $this->Nb_user_likes;
    }

    public function setNbUserLikes(?int $Nb_user_likes): self
    {
        $this->Nb_user_likes = $Nb_user_likes;

        return $this;
    }

    public function getNbUserDislikes(): ?int
    {
        return $this->Nb_user_dislikes;
    }

    public function setNbUserDislikes(?int $Nb_user_dislikes): self
    {
        $this->Nb_user_dislikes = $Nb_user_dislikes;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->Photo;
    }

    public function setPhoto(?string $Photo): self
    {
        $this->Photo = $Photo;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->Password;
    }

    public function setPassword(string $Password): self
    {
        $this->Password = $Password;

        return $this;
    }

    public function getBoughtOtherUsersPseudo(): ?string
    {
        return $this->Bought_other_users_pseudo;
    }

    public function setBoughtOtherUsersPseudo(?string $Bought_other_users_pseudo): self
    {
        $this->Bought_other_users_pseudo = $Bought_other_users_pseudo;

        return $this;
    }

    public function getBoughtOtherUsersId(): ?string
    {
        return $this->Bought_other_users_id;
    }

    public function setBoughtOtherUsersId(?string $Bought_other_users_id): self
    {
        $this->Bought_other_users_id = $Bought_other_users_id;

        return $this;
    }

    /**
     * @return Collection<int, Deal>
     */
    public function getDeals(): Collection
    {
        return $this->Deals;
    }

    public function addDeal(Deal $deal): self
    {
        if (!$this->Deals->contains($deal)) {
            $this->Deals->add($deal);
            $deal->setSeller($this);
        }

        return $this;
    }

    public function removeDeal(Deal $deal): self
    {
        if ($this->Deals->removeElement($deal)) {
            // set the owning side to null (unless already changed)
            if ($deal->getSeller() === $this) {
                $deal->setSeller(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Deal>
     */
    public function getPurchases(): Collection
    {
        return $this->Purchases;
    }

    public function addPurchase(Deal $purchase): self
    {
        if (!$this->Purchases->contains($purchase)) {
            $this->Purchases->add($purchase);
            $purchase->setBuyer($this);
        }

        return $this;
    }

    public function removePurchase(Deal $purchase): self
    {
        if ($this->Purchases->removeElement($purchase)) {
            // set the owning side to null (unless already changed)
            if ($purchase->getBuyer() === $this) {
                $purchase->setBuyer(null);
            }
        }

        return $this;
    }

    public function getRoles(): array
    {
        return $this->Roles;
    }

    public function setRoles(array $Roles): self
    {
        $this->Roles = $Roles;

        return $this;
    }

    public function getSalt()
    {
        //
    }

    public function eraseCredentials()
    {
        //
    }

    public function getUserIdentifier(): string
    {
        return $this->Email;
    }
}
