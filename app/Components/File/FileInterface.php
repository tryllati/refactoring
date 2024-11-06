<?php

declare(strict_types=1);

namespace App\Components\File;

interface FileInterface
{
    public function filename(): string;

    public function setFilename(string $filename): static;

    public function path(): string;

    public function setPath(string $path): static;

    public function fullPath(): string;

    public function read();

    public function fileExist(): bool;

    public static function exist(string $path): bool;
}