<?php

declare(strict_types=1);

namespace App\Components\File\Csv;

use App\Components\File\File;
use App\Exceptions\FileNotFoundException;

class CSVFile extends File implements CSVFileInterface
{
    protected string $separator;

    function __construct(string $filename, string $path = '.', string $separator = ';')
    {
        parent::__construct($filename, $path);

        $this->separator = $separator;
    }

    public function separator(): string
    {
        return $this->separator;
    }

    public function setSeparator(string $separator): static
    {
        $this->separator = $separator;

        return $this;
    }

    /**
     * @throws FileNotFoundException
     */
    public function read(): CsvDataCollection
    {
        if(! $this->fileExist()) {
            throw new FileNotFoundException('File not found! ('. $this->fullPath() .')');
        }

        $csvDataCollection = CsvDataCollection::make();

        if (($handle = fopen($this->fullPath(), 'r')) !== false) {
            while (($data = fgetcsv($handle, null, $this->separator)) !== false) {
                $csvDataCollection->add($data);
            }

            fclose($handle);
        }

        return $csvDataCollection;
    }
}
