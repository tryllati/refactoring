<?php

declare(strict_types=1);

namespace App\Builder;

use App\Components\DocumentList\DocumentListElement;
use App\Components\Partner\Partner;
use App\Components\Partner\PartnerItem;
use App\Enums\CsvDocumentElementTypeEnum;
use App\Support\Collection\Collection;

final class CSVDocumentListElementBuilder
{
    private DocumentListElement $documentListElement;

    public function __construct() {
        $this->documentListElement = new DocumentListElement();
    }

    public function setId(string $id): self
    {
        $this->documentListElement->setId((int) $id);

        return $this;
    }

    public function setType(string $type): self
    {
        $this->documentListElement->setType(CsvDocumentElementTypeEnum::tryFrom($type));

        return $this;
    }

    public function setPartner(array $mate): self
    {
        if(empty($mate)){
            $this->documentListElement->setPartner(null);
        } else {
            $partner = new Partner();

            $partner->setId((int) $mate['id'])
                    ->setName((string) $mate['name']);

            $this->documentListElement->setPartner($partner);
        }

        return $this;
    }

    public function setItems(array $items): self
    {
        $partnerItems = new Collection();

        if(!empty($partner)) {

            foreach ($items as $item) {
                $partnerItem = new PartnerItem();

                $partnerItem->setName((string)$item['name'])
                            ->setUnitPrice((int)$item['unit_price'])
                            ->setQuantity((int)$item['quantity']);

                $partnerItems->add($partnerItem);
            }
        }

        $this->documentListElement->setItems($partnerItems);

        return $this;
    }

    public function get(): DocumentListElement
    {
        return $this->documentListElement;
    }
}
