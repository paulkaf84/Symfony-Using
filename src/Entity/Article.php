<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Article
{
    /**
     * @Assert\Length(
     *     min=10,
     *     max=70,
     *     minMessage="too short",
     *     maxMessage="too long"
     * )
     */
    private $author;
    private $content;
    private $title;

    /**
     * @return mixed
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