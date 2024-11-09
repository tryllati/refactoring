<?php

declare(strict_types=1);

namespace App\Components\Console\Parameter;

use App\Components\Console\Parameter\Templates\DocumentListConsoleParameterTemplate;
use App\Support\Collection\CollectionInterface;
use App\Traits\MakeAbleInterface;

interface ParameterTemplateFactoryInterface extends MakeAbleInterface
{
    public function documentListParameterTemplate(CollectionInterface $parameters): DocumentListConsoleParameterTemplate;
}
