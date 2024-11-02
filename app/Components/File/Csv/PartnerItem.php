<?php

declare(strict_types=1);

namespace App\Components\File\Csv;

use App\Traits\NameTrait;

class PartnerItem
{
    use NameTrait;

    private int $unitPrice; // kell egy price osztály?? nagyon muszáj?
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
}
