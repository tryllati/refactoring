<?php

declare(strict_types=1);

namespace App\Components\Console;

interface ConsoleCommandInterface
{
    public function command(): CommandInterface;
}
