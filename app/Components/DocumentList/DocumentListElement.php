<?php

declare(strict_types=1);

namespace App\Components\DocumentList;

use App\Components\Partner\Partner;
use App\Enums\CsvDocumentElementTypeEnum;
use App\Support\Collection\CollectionInterface;
use App\Traits\IdTrait;

class DocumentListElement implements DocumentListElementInterface
{
    use IdTrait;

    private CsvDocumentElementTypeEnum $type;
    private null|Partner $partner;
    private CollectionInterface $items;

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

    /**
     * Collection contain PartnerItem classes
     */
    public function items(): CollectionInterface
    {
        return $this->items;
    }

    public function setItems(CollectionInterface $items): self
    {
        $this->items = $items;

        return $this;
    }

    public function itemsTotalPrice(): int
    {
        $totalPrice = 0;

        foreach($this->items as $item){

            $totalPrice += $item->price();
        }

        return $totalPrice;
    }
}
