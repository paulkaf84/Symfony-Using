<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]

class RandomArticle
{

     #[ORM\Id]
     #[ORM\GeneratedValue(strategy: "AUTO")]
     #[ORM\Column(type: "integer")]

    public int $id;

    #[ORM\Column(type: "string")]
    public string $title;

    #[ORM\Column(type: "string")]
    public string $content;

    #[ORM\Column(name: "date", type: "datetime")]
    public string $date;
}