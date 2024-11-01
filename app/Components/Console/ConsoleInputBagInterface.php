<?php

declare(strict_types=1);

namespace App\Components\Console;

interface ConsoleInputBagInterface
{
    public function numberOfParameters(): int;
}