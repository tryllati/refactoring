<?php

declare(strict_types=1);

namespace App\Components\Console;

use App\Components\Console\Template\ConsoleTemplateInterface;

class ConsoleOutput implements ConsoleOutputInterface
{
    public static function print(string $message): void
    {
        echo($message);
    }

    public static function printByTemplate(ConsoleTemplateInterface $template): void
    {
        $template->handle();
    }
}
