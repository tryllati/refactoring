<?php

declare(strict_types=1);

namespace Components\Partner;

use App\Components\Partner\Partner;
use PHPUnit\Framework\TestCase;

class PartnerTest extends TestCase
{
    public function testPartner(): void
    {
        $partner = new Partner();

        $id = 1;
        $name = 'Attila';

        $partner->setId($id)
                ->setName($name);

        $this->assertInstanceOf(Partner::class, $partner);

        $this->assertIsInt($partner->id());
        $this->assertIsString($partner->name());

        $this->assertEquals($partner->id(), $id);
        $this->assertEquals($partner->name(), $name);
    }
}
