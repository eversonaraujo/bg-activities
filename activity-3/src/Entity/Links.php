<?php

namespace App\Entity;

use App\Repository\LinksRepository;
use Doctrine\ORM\Mapping as ORM;
use JsonSerializable;

/**
 * @ORM\Entity(repositoryClass=LinksRepository::class)
 */
class Links implements JsonSerializable
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $url;

    /**
     * @ORM\Column(type="string", length=21)
     */
    private $shortlink;

    /**
     * @ORM\Column(type="integer")
     */
    private $visits;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    public function __construct()
    {
        $this->visits = 0;
        $this->createdAt = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;
        return $this;
    }

    public function getShortlink(): ?string
    {
        return $this->shortlink;
    }

    public function setShortlink(string $shortlink): self
    {
        $this->shortlink = $shortlink;
        return $this;
    }

    public function getVisits(): ?int
    {
        return $this->visits;
    }

    public function setVisits(int $visits): self
    {
        $this->visits = $visits;
        return $this;
    }
    
    public function addVisit(): self
    {
        $this->visits += 1;
        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function jsonSerialize(): mixed
    {
        return [
            'id' => $this->getId(),
            'url' => $this->getUrl(),
            'shortlink' => $this->getShortlink(),
            'visits' => $this->getVisits(),
            'createdAt' => $this->getCreatedAt()->getTimestamp(),
        ];
    }
}
