<?php

declare(strict_types=1);

namespace App\Components\Console\Template;

use App\Components\DocumentList\DocumentListElement;

final class DocumentListElementConsoleTemplate extends ConsoleTemplate
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
            $this->strPad($tag, $this->padLength);
        }

        $this->break();
    }

    private function printHeaderUnderline(): void
    {
        foreach ($this->header as $tag) {
            $this->strRepeat($this->lineCharacter, $this->padLength);
        }

        $this->break();
    }

    private function printDocument(): void
    {
        foreach ($this->documents as $document) {

            $this->strPad((string) $document->id(), $this->padLength);
            $this->strPad($document->type()->value, $this->padLength);
            $this->strPad((is_null($document->partner()) ? '' : $document->partner()->name()), $this->padLength);
            $this->strPad((string) $document->itemsTotalPrice(), $this->padLength);

            $this->break();
        }
    }
}
