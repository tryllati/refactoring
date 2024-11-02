<?php

declare(strict_types=1);

namespace App\Components\Console;

class Console implements ConsoleCommandInterface
{
    protected Command $command;

    public function __construct(array $inputs = []) {
        $this->command = new Command($inputs);
    }

    public function command(): CommandInterface
    {
        return $this->command;
    }
}
