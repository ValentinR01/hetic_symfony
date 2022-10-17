<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 30)]
    private ?string $Pseudo = null;

    #[ORM\Column(length: 255)]
    private ?string $Email = null;

    #[ORM\Column(nullable: true)]
    private ?int $Nb_user_likes = null;

    #[ORM\Column(nullable: true)]
    private ?int $Nb_user_dislikes = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Photo = null;

    #[ORM\Column(length: 255)]
    private ?string $Password = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $ID_user_rights = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $Bought_other_users_pseudo = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $Bought_other_users_id = null;

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

    public function getIDUserRights(): ?string
    {
        return $this->ID_user_rights;
    }

    public function setIDUserRights(?string $ID_user_rights): self
    {
        $this->ID_user_rights = $ID_user_rights;

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
}
