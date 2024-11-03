<?php

declare(strict_types=1);

namespace Support;

use App\Support\Str\Str;
use PHPUnit\Framework\TestCase;

class StrTest extends TestCase
{
    public function testStrPad(): void
    {
        $text = 'lorem';
        $length = 20;

        Str::strPad($text, $length);
        $this->expectOutputString(str_pad($text, $length));
    }

    public function testStrRepeat(): void
    {
        $text = 'lorem';
        $length = 10;

        Str::strRepeat($text, $length);
        $this->expectOutputString(str_repeat($text, $length));
    }
}
