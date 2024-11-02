<?php

declare(strict_types=1);

namespace App\Traits;

interface NameInterface
{
    public function name(): string;

    public function setName(string $name): self;
}
