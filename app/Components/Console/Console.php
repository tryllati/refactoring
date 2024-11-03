<?php

declare(strict_types=1);

namespace App\Components\Console;

class Console implements ConsoleInterface
{
    protected ConsoleCommand $command;

    protected ConsoleOutput $output;

    public function __construct(array $inputs = []) {
        $this->command = new ConsoleCommand($inputs);
        $this->output  = new ConsoleOutput();
    }

    public function command(): ConsoleCommandInterface
    {
        return $this->command;
    }

    public function output(): ConsoleOutputInterface
    {
        return $this->output;
    }
}
