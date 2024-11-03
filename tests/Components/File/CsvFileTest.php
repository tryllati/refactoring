<?php

declare(strict_types=1);

namespace Components\File;

use App\Components\File\Csv\CSVFile;
use App\Exceptions\FileNotFoundException;
use PHPUnit\Framework\TestCase;

class CsvFileTest extends TestCase
{
    public function testCsvFileParameters(): void
    {
        $filename  = 'starwars.csv';
        $path      = 'joda' . DIRECTORY_SEPARATOR . 'kenobi';
        $separator = ',';

        $csvFile = new CSVFile($filename, $path, $separator);

        $this->assertIsString($csvFile->filename());
        $this->assertIsString($csvFile->path());
        $this->assertIsString($csvFile->fullPath());

        $this->assertEquals($csvFile->filename(), $filename);
        $this->assertEquals($csvFile->path(), $path);
        $this->assertEquals($csvFile->fullPath(), ($path . DIRECTORY_SEPARATOR . $filename));

        $this->expectException(FileNotFoundException::class);

        $csvFile->read();
    }
}
