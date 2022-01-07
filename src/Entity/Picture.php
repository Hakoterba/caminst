<?php

namespace App\Entity;

use App\Repository\PictureRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PictureRepository::class)]
class Picture
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity: user::class, inversedBy: 'pictures')]
    private $user;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private $isProfilPicture;

    #[ORM\Column(type: 'string', length: 30)]
    private $path;

    #[ORM\ManyToOne(targetEntity: Publication::class, inversedBy: 'picture')]
    private $publication;

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

    public function getIsProfilPicture(): ?bool
    {
        return $this->isProfilPicture;
    }

    public function setIsProfilPicture(?bool $isProfilPicture): self
    {
        $this->isProfilPicture = $isProfilPicture;

        return $this;
    }

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(string $path): self
    {
        $this->path = $path;

        return $this;
    }

    public function getPublication(): ?Publication
    {
        return $this->publication;
    }

    public function setPublication(?Publication $publication): self
    {
        $this->publication = $publication;

        return $this;
    }
}
