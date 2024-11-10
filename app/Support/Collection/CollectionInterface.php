<?php

declare(strict_types=1);

namespace App\Support\Collection;

use App\Traits\MakeAbleInterface;
use Countable;
use IteratorAggregate;

interface CollectionInterface extends Countable, IteratorAggregate, MakeAbleInterface
{
    public function add($item): static;

    public function all(): array;

    public function isEmpty(): bool;

    public function isNotEmpty(): bool;

    public function shift(): static;

    public function map(callable $callback): static;

    public static function mapper(array $array, callable $callback): array;

    public function filter(callable $callback = null): static;

    public static function where($array, callable $callback): array;

    public function get($key, $default = null): mixed;
}