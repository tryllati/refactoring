<?php

declare(strict_types=1);

namespace App\Components\File\Csv;

use App\Components\File\FileInterface;

interface CSVFileInterface extends FileInterface
{
    public function separator(): string;

    public function setSeparator(string $separator): static;
}
