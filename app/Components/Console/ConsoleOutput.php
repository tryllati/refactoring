<?php

declare(strict_types=1);

namespace App\Components\Console;

class ConsoleOutput implements ConsoleOutputInterface
{
    public static function print(string $message): void
    {
        echo($message);
    }
}
