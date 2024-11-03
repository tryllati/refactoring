<?php

declare(strict_types=1);

namespace App\Components\Partner;

use App\Traits\NameInterface;

interface PartnerItemInterface extends NameInterface
{
    public function unitPrice(): int;

    public function setUnitPrice(int $unitPrice): self;

    public function quantity(): int;

    public function setQuantity(int $quantity): self;

    public function price(): int;
}
