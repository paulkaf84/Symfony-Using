<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Article
{
    #[ORM\Column(type: "integer")]
    #[ORM\GeneratedValue(strategy: "AUTO")]
    #[ORM\Id]
    private int $id;
    /**
     * @Assert\Length(
     *     min=10,
     *     max=70,
     *     minMessage="too short",
     *     maxMessage="too long"
     * )
     */
    #[ORM\Column(type: "string")]
    private string $author;

    #[ORM\Column(type: "string")]
    private string $content;

    #[ORM\Column(type: "string")]
    private string $title;

    /**
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author): static
    {
        $this->author = $author;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content): static
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): static
    {
        $this->title = $title;
        return $this;
    }
}