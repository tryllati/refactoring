<?php

require './bootstrap.php';

use App\Builder\CSVDocumentListElementBuilder;
use App\Components\Console\Console;
use app\Components\DocumentList\DocumentListElement;
use App\Components\File\Csv\CSVFile;

const DOCUMENT_NAME = 'document_list.csv';

$console = new Console($argv);
$console->command()->parametersIsEqualOrDie(4, 'Ambiguous number of parameters!');

try{
    $csvFile = new CSVFile(DOCUMENT_NAME);

    $documentType = $console->command()->parameter(1);
    $partnerId    = $console->command()->parameter(2);

    $selectedCSVDocumentListElements = $csvFile->read()->withoutHeader()
        ->map(fn($element) => (new CSVDocumentListElementBuilder())
            ->setId($element[0])
            ->setType($element[1])
            ->setPartner(json_decode($element[2], true))
            ->setItems(json_decode($element[3], true))
            ->get()
        )
        ->filter(
            function(DocumentListElement $element) use ($documentType, $partnerId) {
                $partner_id = is_null($element->partner()) ? null : $element->partner()->id();

                return $partnerId == $partner_id &&
                       $documentType == $element->type()->value;
            }
        )->all();

   var_dump($selectedCSVDocumentListElements);
}
catch(Exception $e)
{
    echo $e->getMessage();
}
