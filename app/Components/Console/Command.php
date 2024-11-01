<?php

declare(strict_types=1);

namespace App\Components\Console;

class Command implements CommandInterface
{
    protected ConsoleInputBag $consoleInputBag;

    public function __construct(array $inputs = []) {
        $this->consoleInputBag = new ConsoleInputBag($inputs);
    }

    public function parametersIsEqualOrDie(int $numberOfParameters, string $errorMessage = null): void
    {
        if($this->consoleInputBag->numberOfParameters() != $numberOfParameters) {

            echo is_null($errorMessage)
                ? 'BaZzInGA!'
                : $errorMessage;

            exit(1);
        }
    }
}
