<?php

declare(strict_types=1);

namespace App\Components\DocumentList;

use App\Components\Partner\Partner;
use App\Enums\CsvDocumentElementTypeEnum;
use App\Support\Collection\CollectionInterface;
use App\Traits\IdInterface;

interface DocumentListElementInterface extends IdInterface
{
    public function type(): CsvDocumentElementTypeEnum;

    public function setType(CsvDocumentElementTypeEnum $type): self;

    public function partner(): null|Partner;

    public function setPartner(null|Partner $partner): self;

    public function items(): CollectionInterface;

    public function setItems(CollectionInterface $items): self;

    public function itemsTotalPrice(): int;
}
