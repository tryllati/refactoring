<?php

declare(strict_types=1);

namespace App\Components\Console\Template;

interface ConsoleTemplateInterface
{
    public function handle(): void;

    public function strPad(string $content, int $length): void;

    public function strRepeat(string $lineCharacter, int $length): void;

    public function break(): void;
}
