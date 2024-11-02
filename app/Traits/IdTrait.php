<?php

declare(strict_types=1);

namespace App\Traits;

trait IdTrait
{
    private int $id;

    public function id(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }
}
