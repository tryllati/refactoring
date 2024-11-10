<?php

declare(strict_types=1);

namespace App\Traits;

interface MakeAbleInterface
{
    public static function make(mixed $parameters = null): static;
}
