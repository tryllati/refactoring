<?php

declare(strict_types=1);

namespace App\Components\File\Csv;

use App\Traits\IdTrait;
use App\Traits\NameTrait;

class Partner implements PartnerInterface
{
    use IdTrait, NameTrait;
}
