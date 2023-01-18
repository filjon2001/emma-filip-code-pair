<?php

declare(strict_types=1);

namespace App;

class Article
{
    public function __construct(public string $title, public string $content)
    {
    }

    public function getExcerpt(int $numberOfWords){

        $words = explode(" ", $this->content);

        $words = array_slice($words, 0, $numberOfWords);
        return implode (" ", $words) . " ...";


        

    }
}