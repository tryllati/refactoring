<?php

declare(strict_types=1);

namespace App\Components\File\Csv;

use App\Enums\CsvDocumentElementTypeEnum;
use App\Support\Collection\CollectionInterface;

interface DocumentListElementInterface
{
    public function id(): int;

    public function setId(int $id): self;

    public function type(): CsvDocumentElementTypeEnum;

    public function setType(CsvDocumentElementTypeEnum $type): self;

    public function partner(): null|Partner;

    public function setPartner(null|Partner $partner): self;

    public function items(): CollectionInterface;

    public function setItems(CollectionInterface $items): self;
}
