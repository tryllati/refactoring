<?php

declare(strict_types=1);

namespace Enums;

use App\Enums\CsvDocumentElementTypeEnum;
use PHPUnit\Framework\TestCase;

class CsvDocumentElementTypeEnumTest extends TestCase
{
    public function testFileNotFound(): void
    {
        $typeEnum = CsvDocumentElementTypeEnum::tryFrom('invoice');
        $this->assertEquals(CsvDocumentElementTypeEnum::INVOICE->value, $typeEnum->value);
        $this->assertEquals(CsvDocumentElementTypeEnum::INVOICE->name, $typeEnum->name);

        $typeEnum = CsvDocumentElementTypeEnum::tryFrom('proforma');
        $this->assertEquals(CsvDocumentElementTypeEnum::PROFORMA->value, $typeEnum->value);
        $this->assertEquals(CsvDocumentElementTypeEnum::PROFORMA->name, $typeEnum->name);

        $typeEnum = CsvDocumentElementTypeEnum::tryFrom('receipt');
        $this->assertEquals(CsvDocumentElementTypeEnum::RECEIPT->value, $typeEnum->value);
        $this->assertEquals(CsvDocumentElementTypeEnum::RECEIPT->name, $typeEnum->name);
    }
}
