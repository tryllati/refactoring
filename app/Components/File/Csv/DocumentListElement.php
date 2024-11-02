<?php

declare(strict_types=1);

namespace App\Components\File\csv;

use App\Enums\CsvDocumentElementTypeEnum;
use App\Support\Collection\Collection;
use App\Traits\IdTrait;

class DocumentListElement implements DocumentListElementInterface
{
    use IdTrait;

    private CsvDocumentElementTypeEnum $type;
    private null|Partner $partner;
    private Collection $items;

    public function type(): CsvDocumentElementTypeEnum
    {
        return $this->type;
    }

    public function setType(CsvDocumentElementTypeEnum $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function partner(): null|Partner
    {
        return $this->partner;
    }

    public function setPartner(null|Partner $partner): self
    {
        $this->partner = $partner;

        return $this;
    }

    public function items(): Collection
    {
        return $this->items;
    }

    public function setItems(Collection $items): self
    {
        $this->items = $items;

        return $this;
    }
}
