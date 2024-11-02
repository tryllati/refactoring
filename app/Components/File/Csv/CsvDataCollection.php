<?php

declare(strict_types=1);

namespace App\Components\File\Csv;

use App\Support\Collection\Collection;

class CsvDataCollection extends Collection implements CsvDataCollectionInterface
{
    function __construct(array $items = [])
    {
        parent::__construct($items);
    }

    public function headerElement(int $number): false|string
    {
        if($number >= 0 && $number < $this->headerLength()){
            return (string) $this->items[0][$number];
        }

        return false;
    }

    /**
     * Number of columns
     */
    public function headerLength(): int
    {
        return count($this->items[0]);
    }

    public function header(): array
    {
        return $this->items[0];
    }

    public function withoutHeader(): static
    {
        return ($this->make($this->items))->shift();
    }
}
