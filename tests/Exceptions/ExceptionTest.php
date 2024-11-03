<?php

declare(strict_types=1);

namespace Exceptions;

use App\Exceptions\FileNotFoundException;
use PHPUnit\Framework\TestCase;

class ExceptionTest extends TestCase
{
    public function testFileNotFound(): void
    {
        $this->expectException(FileNotFoundException::class);

        throw new FileNotFoundException();
    }
}
