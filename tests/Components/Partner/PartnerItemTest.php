<?php

declare(strict_types=1);

namespace Components\Partner;

use App\Components\Partner\PartnerItem;
use PHPUnit\Framework\TestCase;

class PartnerItemTest extends TestCase
{
    public function testPartnerItem()
    {
        $partnerItem = new PartnerItem();

        $name      = 'Attila';
        $unitPrice = 12000;
        $quantity  = 3;

        $partnerItem->setName($name)
                    ->setUnitPrice($unitPrice)
                    ->setQuantity($quantity);

        $this->assertInstanceOf(PartnerItem::class, $partnerItem);

        $this->assertIsString($partnerItem->name());
        $this->assertIsInt($partnerItem->unitPrice());
        $this->assertIsInt($partnerItem->quantity());
        $this->assertIsInt($partnerItem->price());

        $this->assertEquals($partnerItem->name(), $name);
        $this->assertEquals($partnerItem->unitPrice(), $unitPrice);
        $this->assertEquals($partnerItem->quantity(), $quantity);
        $this->assertEquals($partnerItem->price(), ($unitPrice * $quantity));
    }
}
