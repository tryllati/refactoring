<?php

declare(strict_types=1);

namespace App\Components\Console\Template;

abstract class ConsoleTemplate implements ConsoleTemplateInterface
{
    public function strPad(string $content, int $length): void
    {
        echo str_pad($content, $length);
    }

    public function strRepeat(string $lineCharacter, int $length): void
    {
        echo str_repeat($lineCharacter, $length);
    }

    public function break(): void
    {
        echo "\n";
    }
}
