<?php

declare(strict_types=1);

namespace App\Components\Console\Parameter;

use App\Components\Console\Parameter\Templates\DocumentListConsoleParameterTemplate;
use App\Support\Collection\CollectionInterface;
use App\Traits\MakeAbleTrait;

class ParameterTemplateFactory implements ParameterTemplateFactoryInterface
{
    use MakeAbleTrait;

    public function documentListParameterTemplate(CollectionInterface $parameters): DocumentListConsoleParameterTemplate
    {
        return new DocumentListConsoleParameterTemplate($parameters);
    }
}
