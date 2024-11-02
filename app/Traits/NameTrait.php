<?php

declare(strict_types=1);

namespace App\Traits;

trait NameTrait
{
    private string $name;

    public function name(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
