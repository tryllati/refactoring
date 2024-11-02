<?php

declare(strict_types=1);

namespace App\Components\Console;

// Át kell alakítani collectionné
class ConsoleInputBag implements ConsoleInputBagInterface
{
    private array $parameters;

    public function __construct(array $parameters = [])
    {
        $this->parameters = $parameters;
    }

    public function numberOfParameters(): int
    {
        return count($this->parameters);
    }
}
