<?php

declare(strict_types=1);

namespace Console;

use App\Components\Console\Console;
use PHPUnit\Framework\TestCase;

class ConsoleTest extends TestCase
{
    private Console $console;

    public function setUp(): void
    {
        $this->console = new Console(['php', 'document_list.php',  'invoice', '1', '12500']);
    }

    public function testConsoleParameters(): void
    {
        $this->assertEquals('php', $this->console->command()->parameter(0));
        $this->assertEquals('document_list.php', $this->console->command()->parameter(1));
        $this->assertEquals('invoice', $this->console->command()->parameter(2));
        $this->assertEquals(1, $this->console->command()->parameter(3));
        $this->assertEquals(12500, $this->console->command()->parameter(4));
    }

    // More console test operation here..
}
