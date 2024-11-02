<?php

declare(strict_types=1);

namespace App\Enums;

enum CsvDocumentElementTypeEnum: string
{
    case INVOICE  = 'invoice';
    case PROFORMA = 'proforma';
    case RECEIPT  = 'receipt';
}
