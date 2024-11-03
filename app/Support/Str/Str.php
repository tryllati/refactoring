<?php

declare(strict_types=1);

namespace App\Support\Str;

class Str implements StrInterface
{
    public static function strPad(string $content, int $length): void
    {
        echo str_pad($content, $length);
    }

    public static function strRepeat(string $lineCharacter, int $length): void
    {
        echo str_repeat($lineCharacter, $length);
    }

    public static function break(): void
    {
        echo "\n";
    }
}
