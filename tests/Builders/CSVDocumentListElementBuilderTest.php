<?php

declare(strict_types=1);

namespace Builders;

use App\Builders\CSVDocumentListElementBuilder;
use App\Components\DocumentList\DocumentListElement;
use App\Components\Partner\Partner;
use App\Components\Partner\PartnerItem;
use App\Enums\CsvDocumentElementTypeEnum;
use App\Support\Collection\Collection;
use PHPUnit\Framework\TestCase;

class CSVDocumentListElementBuilderTest extends TestCase
{
    public function testCSVDocumentListElementBuilder(): void
    {
        $builder = new CSVDocumentListElementBuilder();

        $id = '1';
        $type = 'invoice';
        $partner = ["id" => 354, "name" => "Nagy Béla"];
        $items   = [
            ["name" => "alma","unit_price" => 5000, "quantity" => 5],
            ["name" => "körte","unit_price" => 15000, "quantity" => 1]
        ];

        $builder->setId($id)
                ->setType($type)
                ->setPartner($partner)
                ->setItems($items);

        $this->assertInstanceOf(CSVDocumentListElementBuilder::class, $builder);

        $listElement = $builder->get();
        $this->assertInstanceOf(DocumentListElement::class, $listElement);

        $this->assertIsInt($listElement->id());
        $this->assertInstanceOf(CsvDocumentElementTypeEnum::class, $listElement->type());
        $this->assertIsString($listElement->type()->value);
        $this->assertInstanceOf(Partner::class, $listElement->partner());
        $this->assertInstanceOf(Collection::class, $listElement->items());
        $this->assertInstanceOf(PartnerItem::class, $listElement->items()->get(0));

        $this->assertEquals($listElement->id(), $id);
        $this->assertEquals($listElement->type()->value, $type);
        $this->assertEquals($listElement->partner()->id(), $partner['id']);
        $this->assertEquals($listElement->partner()->name(), $partner['name']);
        $this->assertEquals($listElement->items()->get(0)->name(), $items[0]['name']);
        $this->assertEquals($listElement->items()->get(0)->unitPrice(), $items[0]['unit_price']);
        $this->assertEquals($listElement->items()->get(0)->quantity(), $items[0]['quantity']);
    }
}
