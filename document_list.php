<?php

require './bootstrap.php';

use App\Builders\CSVDocumentListElementBuilder;
use App\Components\Console\Console;
use App\Components\Console\Template\DocumentListElementConsoleTemplate;
use App\Components\DocumentList\DocumentListElement;
use App\Components\File\Csv\CSVFile;

const DOCUMENT_NAME = 'document_list.csv';

$console = new Console($argv);
$console->command()->parametersIsEqualOrDie(4, 'Ambiguous number of parameters!');

try{
    $csvFile = new CSVFile(DOCUMENT_NAME);

    $documentType = $console->command()->parameter(1);
    $partnerId    = $console->command()->parameter(2);
    $minimumPrice = $console->command()->parameter(3);

    $selectedCSVDocumentListElements = $csvFile->read()->withoutHeader()
        ->map(fn($element) => (new CSVDocumentListElementBuilder())
            ->setId($element[0])
            ->setType($element[1])
            ->setPartner(json_decode($element[2], true))
            ->setItems(json_decode($element[3], true))
            ->get()
        )
        ->filter(
            function(DocumentListElement $element) use ($documentType, $partnerId, $minimumPrice) {

                return $partnerId    == (is_null($element->partner()) ? null : $element->partner()->id()) &&
                       $documentType == $element->type()->value &&
                       $minimumPrice < $element->itemsTotalPrice();
            }
        );

    $console->output()
        ->printByTemplate(
            new DocumentListElementConsoleTemplate($selectedCSVDocumentListElements->all())
        );
}
catch(Exception $e)
{
    $console->output()->print($e->getMessage());
}