<?php

declare(strict_types=1);

namespace App\Components\File\Csv;

interface PartnerInterface
{
    public function id(): int;

    public function setId(int $id): self;

    public function name(): string;

    public function setName(string $name): self;
}
