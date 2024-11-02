<?php

require './bootstrap.php';

use App\Components\Console\Console;
use App\Builder\CSVDocumentListElementBuilder;
use App\Components\File\Csv\CSVFile;
use App\Components\File\csv\DocumentListElement;

const DOCUMENT_NAME = 'document_list.csv';

$console = new Console($argv);
$console->command()->parametersIsEqualOrDie(4, 'Ambiguous number of parameters!');

try{
    $csvFile = new CSVFile(DOCUMENT_NAME);

    $csvFileElements = $csvFile->read();
    $csvFileHeader   = $csvFileElements->header();

/*
    var_dump($csvFileHeader);
    var_dump($csvFileElements->withoutHeader());
*/

    $a = 1; // be kell hozni az inputokat

    $csvDocumentListElements = $csvFileElements->withoutHeader()
        ->map(fn($element) => (new CSVDocumentListElementBuilder())
            ->setId($element[0])
            ->setType($element[1])
            ->setPartner(json_decode($element[2], true))
            ->setItems(json_decode($element[3], true))
            ->get()
        )
        ->filter(
            function(DocumentListElement $element) use ($a) {
                $partnerId = is_null($element->partner()) ? null : $element->partner()->id();

                return $a == $partnerId;
            }
        )->all();

   var_dump($csvDocumentListElements);
}
catch(Exception $e)
{
    echo $e->getMessage();
}
