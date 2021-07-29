<?php

namespace App\Entity;

use App\Repository\ColorRepository;
use App\Validator as AcmeAssert;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ColorRepository::class)
 */
class Color
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50, nullable=false)
     * @Assert\NotBlank(message ="Un des champs de couleur est manquant !")
     * @AcmeAssert\HexadecimalColor
     */
    private $code_text;

    /**
     * @ORM\Column(type="string", length=50, nullable=false)
     * @Assert\NotBlank(message = "Un des champs de couleur est manquant !")
     * @AcmeAssert\HexadecimalColor
     */
    private $code_bg;


    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="colors")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\OneToMany(targetEntity=Category::class, mappedBy="color")
     */
    private $categories;

    public function __construct()
    {
        $this->categories = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->code_bg . '_' . $this->code_text;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeText(): ?string
    {
        return $this->code_text;
    }

    public function setCodeText(string $code_text): self
    {
        $this->code_text = $code_text;

        return $this;
    }

    public function getCodeBg(): ?string
    {
        return $this->code_bg;
    }

    public function setCodeBg(string $code_bg): self
    {
        $this->code_bg = $code_bg;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return Collection|Category[]
     */
    public function getCategories(): Collection
    {
        return $this->categories;
    }

    public function addCategory(Category $category): self
    {
        if (!$this->categories->contains($category)) {
            $this->categories[] = $category;
            $category->setColor($this);
        }

        return $this;
    }

    public function removeCategory(Category $category): self
    {
        if ($this->categories->removeElement($category)) {
            // set the owning side to null (unless already changed)
            if ($category->getColor() === $this) {
                $category->setColor(null);
            }
        }

        return $this;
    }
}
