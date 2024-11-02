<?php

declare(strict_types=1);

namespace App\Components\File\Csv;

interface CSVFileInterface
{
    public function separator(): string;

    public function setSeparator(string $separator): static;
}
