<?php

declare(strict_types=1);

namespace App\Components\Console;

use App\Support\Collection\CollectionInterface;

interface ConsoleCommandInterface
{
    public function parameter(int $number): mixed;

    public function parameters(): CollectionInterface;

    public function parametersIsEqualOrDie(int $numberOfParameters, string $errorMessage = null): void;
}
