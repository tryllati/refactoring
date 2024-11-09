<?php

declare(strict_types=1);

namespace App\Components\Console;

interface ConsoleInterface
{
    public function command(): ConsoleCommandInterface;

    public function output(): ConsoleOutputInterface;
}
