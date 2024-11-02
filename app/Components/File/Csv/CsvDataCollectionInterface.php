<?php

declare(strict_types=1);

namespace App\Components\File\Csv;

interface CsvDataCollectionInterface
{
    public function headerElement(int $number): false|string;

    public function headerLength(): int;

    public function header(): array;

    public function withoutHeader(): static;
}
