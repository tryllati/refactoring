<?php

declare(strict_types=1);

namespace App\Components\Console;

interface CommandInterface
{
    public function parametersIsEqualOrDie(int $numberOfParameters, string $errorMessage = null): void;
}