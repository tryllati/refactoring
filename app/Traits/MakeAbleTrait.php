<?php

declare(strict_types=1);

namespace App\Traits;

trait MakeAbleTrait
{
    public static function make(mixed $parameters = null): self
    {
        return is_null($parameters)
            ? new self($parameters)
            : new self();
    }
}
