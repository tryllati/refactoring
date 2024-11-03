<?php

declare(strict_types=1);

namespace App\Components\Console;

use App\Support\Collection\Collection;
use App\Support\Collection\CollectionInterface;

class Command implements CommandInterface
{
    protected CollectionInterface $consoleInputBag;

    public function __construct(array $inputs = []) {
        $this->consoleInputBag = new Collection($inputs);
    }

    public function parameter(int $number): mixed
    {
        return $this->consoleInputBag->get($number);
    }

    public function parametersIsEqualOrDie(int $numberOfParameters, string $errorMessage = null): void
    {
        if($this->consoleInputBag->count() != $numberOfParameters) {

            $message = is_null($errorMessage)
                ? 'BaZzInGA!'
                : $errorMessage;

            ConsoleOutput::print($message);

            exit();
        }
    }
}
