<?php

require './bootstrap.php';

use App\Builders\CSVDocumentListElementBuilder;
use App\Components\Console\Console;
use App\Components\Console\Output\Templates\DocumentListElementConsoleOutputTemplate;
use App\Components\Console\Parameter\ParameterTemplateFactory;
use App\Components\DocumentList\DocumentListElement;
use App\Components\File\Csv\CSVFile;

$console = new Console($argv);
$console->command()->parametersIsEqualOrDie(4, 'Ambiguous number of parameters!');

try{
    $documentListParameterTemplate = ParameterTemplateFactory::make()
        ->documentListParameterTemplate($console->command()->parameters());

    $csvFile = new CSVFile($documentListParameterTemplate::FILENAME);

    $selectedCSVDocumentListElements = $csvFile->read()->withoutHeader()
        ->map(fn($element) => (new CSVDocumentListElementBuilder())
            ->setId($element[0])
            ->setType($element[1])
            ->setPartner(json_decode($element[2], true))
            ->setItems(json_decode($element[3], true))
            ->get()
        )
        ->filter(
            function(DocumentListElement $element) use ($documentListParameterTemplate) {

                return $documentListParameterTemplate->partnerId()    == (is_null($element->partner()) ? null : $element->partner()->id()) &&
                       $documentListParameterTemplate->documentType() === $element->type() &&
                       $documentListParameterTemplate->minimumPrice() < $element->itemsTotalPrice();
            }
        );

    $console->output()
        ->printByTemplate(
            new DocumentListElementConsoleOutputTemplate($selectedCSVDocumentListElements->all())
        );
}
catch(Exception $e)
{
    $console->output()->print($e->getMessage());
}
