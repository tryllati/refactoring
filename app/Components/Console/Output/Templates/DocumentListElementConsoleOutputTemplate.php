<?php

declare(strict_types=1);

namespace App\Components\Console\Output\Templates;

use App\Components\Console\Output\ConsoleOutputTemplate;
use App\Components\DocumentList\DocumentListElement;
use App\Support\Str\Str;

final class DocumentListElementConsoleOutputTemplate extends ConsoleOutputTemplate
{
    private array $header = ['document_id', 'document_type','partner name', 'total'];
    private string $lineCharacter = '=';
    private int $padLength = 20;

    /**
     * @param DocumentListElement[] $documents
     */
    public function __construct(private readonly array $documents){}

    public function handle(): void
    {
        $this->printHeader();
        $this->printHeaderUnderline();
        $this->printDocument();
    }

    private function printHeader(): void
    {
        foreach ($this->header as $tag) {
            Str::strPad($tag, $this->padLength);
        }

        Str::break();
    }

    private function printHeaderUnderline(): void
    {
        foreach ($this->header as $tag) {
            Str::strRepeat($this->lineCharacter, $this->padLength);
        }

        Str::break();
    }

    private function printDocument(): void
    {
        foreach ($this->documents as $document) {

            Str::strPad((string) $document->id(), $this->padLength);
            Str::strPad($document->type()->value, $this->padLength);
            Str::strPad((is_null($document->partner()) ? '' : $document->partner()->name()), $this->padLength);
            Str::strPad((string) $document->itemsTotalPrice(), $this->padLength);

            Str::break();
        }
    }
}
