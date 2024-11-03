<?php

declare(strict_types=1);

namespace App\Components\Partner;

use App\Traits\NameTrait;

class PartnerItem implements PartnerItemInterface
{
    use NameTrait;

    private int $unitPrice;
    private int $quantity;

    public function unitPrice(): int
    {
        return $this->unitPrice;
    }

    public function setUnitPrice(int $unitPrice): self
    {
        $this->unitPrice = $unitPrice;

        return $this;
    }

    public function quantity(): int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function price(): int
    {
        return $this->unitPrice * $this->quantity;
    }
}
