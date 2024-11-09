<?php

declare(strict_types=1);

namespace App\Components\Console;

use App\Components\Console\Output\ConsoleOutputTemplateInterface;

class ConsoleOutput implements ConsoleOutputInterface
{
    public static function print(string $message): void
    {
        echo($message);
    }

    public static function printByTemplate(ConsoleOutputTemplateInterface $template): void
    {
        $template->handle();
    }
}
