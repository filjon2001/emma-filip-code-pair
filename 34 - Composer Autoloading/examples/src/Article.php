<?php

declare(strict_types=1);

namespace App;

use DateTime;


class Article
{
    public function __construct(public string $title, public string $content, public DateTime $date, public Author $author)
    {
    }

    public function getExcerpt(int $numberOfWords)
    {

        $words = explode(" ", $this->content);

        $words = array_slice($words, 0, $numberOfWords);
        return implode(" ", $words) . " ...";
    }

    
}