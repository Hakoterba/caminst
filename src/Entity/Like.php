<?php

namespace App\Entity;

use App\Repository\LikeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LikeRepository::class)]
#[ORM\Table(name: '`like`')]
class Like
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity: user::class, inversedBy: 'likes')]
    private $user;

    #[ORM\ManyToOne(targetEntity: publication::class, inversedBy: 'likes')]
    private $publication;

    #[ORM\ManyToOne(targetEntity: Comment::class, inversedBy: 'likes')]
    private $comments;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private $isLiked;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?user
    {
        return $this->user;
    }

    public function setUser(?user $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getpublication(): ?publication
    {
        return $this->publication;
    }

    public function setpublication(?publication $publication): self
    {
        $this->publication = $publication;

        return $this;
    }

    public function getComments(): ?Comment
    {
        return $this->comments;
    }

    public function setComments(?Comment $comments): self
    {
        $this->comments = $comments;

        return $this;
    }

    public function getIsLiked(): ?bool
    {
        return $this->isLiked;
    }

    public function setIsLiked(?bool $isLiked): self
    {
        $this->isLiked = $isLiked;

        return $this;
    }
}
