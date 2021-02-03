<?php

namespace App\Entity;

use App\Repository\ProjectRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProjectRepository::class)
 */
class Project
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
    private $name;

    /**
     * @ORM\Column(type="date")
     */
    private $fromDate;

    /**
     * @ORM\Column(type="date")
     */
    private $toDate;

    /**
     * @ORM\ManyToMany(targetEntity=UsedTechnology::class, inversedBy="projects")
     */
    private $usedTechnology;

    /**
     * @ORM\ManyToOne(targetEntity=Category::class, inversedBy="projects")
     */
    private $category;

    public function __construct()
    {
        $this->usedTechnology = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getFromDate(): ?\DateTimeInterface
    {
        return $this->fromDate;
    }

    public function setFromDate(\DateTimeInterface $fromDate): self
    {
        $this->fromDate = $fromDate;

        return $this;
    }

    public function getToDate(): ?\DateTimeInterface
    {
        return $this->toDate;
    }

    public function setToDate(\DateTimeInterface $toDate): self
    {
        $this->toDate = $toDate;

        return $this;
    }

    /**
     * @return Collection|UsedTechnology[]
     */
    public function getUsedTechnology(): Collection
    {
        return $this->usedTechnology;
    }

    public function addUsedTechnology(UsedTechnology $usedTechnology): self
    {
        if (!$this->usedTechnology->contains($usedTechnology)) {
            $this->usedTechnology[] = $usedTechnology;
        }

        return $this;
    }

    public function removeUsedTechnology(UsedTechnology $usedTechnology): self
    {
        $this->usedTechnology->removeElement($usedTechnology);

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }
}
