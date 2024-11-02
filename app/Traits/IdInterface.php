<?php

declare(strict_types=1);

namespace App\Traits;

interface IdInterface
{
    public function id(): int;

    public function setId(int $id): self;
}
