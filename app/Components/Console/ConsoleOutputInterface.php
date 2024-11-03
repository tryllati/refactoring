<?php

declare(strict_types=1);

namespace App\Components\Console;

interface ConsoleOutputInterface
{
    public static function print(string $message): void;
}
