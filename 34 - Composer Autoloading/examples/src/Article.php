<?php

declare(strict_types=1);

namespace App;

class Article
{
    public function __construct(public string $title, public string $content)
    {
    }
}
