<?php

declare(strict_types=1);

namespace App\Components\Console;

use App\Components\Console\CommandInterface;

interface ConsoleCommandInterface
{
    public function command(): CommandInterface;
}