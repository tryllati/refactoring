<?php

declare(strict_types=1);

namespace App\Components\Console\Parameter\Templates;

use App\Enums\CsvDocumentElementTypeEnum;
use App\Support\Collection\CollectionInterface;

class DocumentListConsoleParameterTemplate implements DocumentListConsoleParameterTemplateInterface
{
    const FILENAME = 'document_list.csv';

    private null|CsvDocumentElementTypeEnum $documentType = null;

    public function __construct(private readonly CollectionInterface $parameters)
    {
    }

    public function documentType(): CsvDocumentElementTypeEnum
    {
        return $this->documentType ??
            $this->documentType = CsvDocumentElementTypeEnum::tryFrom($this->parameters->get(1));
    }

    public function partnerId(): int
    {
        return (int) $this->parameters->get(2);
    }

    public function minimumPrice():int
    {
        return (int) $this->parameters->get(3);
    }
}
