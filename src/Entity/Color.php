<?php

namespace App\Entity;

use App\Repository\ColorRepository;
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
     * @ORM\Column(type="string", length=50)
     */
    private $code_text;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $code_bg;

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
}
