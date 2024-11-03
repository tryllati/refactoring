<?php

declare(strict_types=1);

namespace App\Support\Str;

interface StrInterface
{
    public static function strPad(string $content, int $length): void;

    public static function strRepeat(string $lineCharacter, int $length): void;

    public static function break(): void;
}
