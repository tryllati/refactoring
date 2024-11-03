<?php

declare(strict_types=1);

namespace App\Components\Console;

use App\Components\Console\Template\ConsoleTemplateInterface;

interface ConsoleOutputInterface
{
    public static function print(string $message): void;

    public static function printByTemplate(ConsoleTemplateInterface $template): void;
}
