<?php

declare(strict_types=1);

namespace App\Support\Collection;

use App\Traits\MakeAbleTrait;
use Traversable;

class Collection implements CollectionInterface
{
    use MakeAbleTrait;

    protected array $items = [];

    public function __construct(array $items = [])
    {
        $this->items = $items;
    }

    public function add($item): static
    {
        $this->items[] = $item;

        return $this;
    }

    public function all(): array
    {
        return $this->items;
    }

    public function count(): int
    {
        return count($this->items);
    }

    public function isEmpty(): bool
    {
        return empty($this->items);
    }

    public function isNotEmpty(): bool
    {
        return ! $this->isEmpty();
    }

    public function shift(): static
    {
        array_shift($this->items);

        return $this;
    }

    public function map(callable $callback): static
    {
        return new static(self::mapper($this->items, $callback));
    }

    public static function mapper(array $array, callable $callback): array
    {
        $keys = array_keys($array);

        $items = array_map($callback, $array, $keys);

        return array_combine($keys, $items);
    }

    public function filter(callable $callback = null): static
    {
        if ($callback) {
            return new static(self::where($this->items, $callback));
        }

        return new static(array_filter($this->items));
    }

    public static function where($array, callable $callback): array
    {
        return array_filter($array, $callback, ARRAY_FILTER_USE_BOTH);
    }

    public function getIterator(): Traversable
    {
        return new \ArrayIterator($this->items);
    }

    public function get($key, $default = null): mixed
    {
        if (array_key_exists($key, $this->items)) {
            return $this->items[$key];
        }

        return $default;
    }
}
