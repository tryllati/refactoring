<?php

declare(strict_types=1);

namespace App\Components\File;

abstract class File implements FileInterface
{
    protected string $filename;

    protected string $path;

    function __construct(string $filename, string $path = '.') {
        $this->filename = $filename;
        $this->path     = $path;
    }

    public function filename(): string
    {
        return $this->filename;
    }

    public function setFilename($filename): static
    {
        $this->filename = $filename;

        return $this;
    }

    public function path(): string
    {
        return $this->path;
    }

    public function setPath(string $path): static
    {
        $this->path = $path;

        return $this;
    }

    public function fullPath(): string
    {
        return $this->path . DIRECTORY_SEPARATOR . $this->filename;
    }

    public function fileExist(): bool
    {
        return self::exist($this->fullPath());
    }

    public static function exist(string $path): bool
    {
        return file_exists($path);
    }
}