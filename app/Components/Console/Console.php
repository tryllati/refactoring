<?php

declare(strict_types=1);

namespace App\Components\Console;

class Console implements ConsoleCommandInterface
{
    protected Command $command;

    protected ConsoleOutputInterface $output;

    public function __construct(array $inputs = []) {
        $this->command = new Command($inputs);
        $this->output  = new ConsoleOutput();
    }

    public function command(): CommandInterface
    {
        return $this->command;
    }

    public function output(): ConsoleOutputInterface
    {
        return $this->output;
    }
}
