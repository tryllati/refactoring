<?php

declare(strict_types=1);

namespace App\Components\Console;

use App\Components\Console\Output\ConsoleOutputTemplateInterface;

interface ConsoleOutputInterface
{
    public static function print(string $message): void;

    public static function printByTemplate(ConsoleOutputTemplateInterface $template): void;
}
