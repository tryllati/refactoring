<?php

declare(strict_types=1);

namespace App\Components\Console\Output;

interface ConsoleOutputTemplateInterface
{
    public function handle(): void;
}
