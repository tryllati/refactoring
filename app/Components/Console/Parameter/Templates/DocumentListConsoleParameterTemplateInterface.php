<?php

declare(strict_types=1);

namespace App\Components\Console\Parameter\Templates;

use App\Enums\CsvDocumentElementTypeEnum;

interface DocumentListConsoleParameterTemplateInterface
{
    public function documentType(): CsvDocumentElementTypeEnum;

    public function partnerId(): int;

    public function minimumPrice(): int;
}
