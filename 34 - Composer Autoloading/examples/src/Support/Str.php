<?php

declare(strict_types=1);

namespace App\Support;

class Str
{
    public static function camelCase(string $string): string
    {
        $string = str_replace(['_', '-'], ' ', $string);

        $words = explode(' ', $string);

        $words = array_map(function ($word) {
            return ucwords(strtolower($word));
        }, $words);

        return lcfirst(implode('', $words));
    }
}
