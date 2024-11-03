<?php

declare(strict_types=1);

namespace Support;

use App\Support\Collection\Collection;
use PHPUnit\Framework\TestCase;

class CollectionTest extends TestCase
{
    private Collection $collection;

    public function setUp(): void
    {
        $this->collection = new Collection(['database','lorem ipsum']);
    }

    public function testCollectionGet()
    {
        $this->assertIsString($this->collection->get(0));
        $this->assertEquals('database', $this->collection->get(0));
        $this->assertEquals('lorem ipsum', $this->collection->get(1));
    }

    public function testCollectionInstance()
    {
        $this->assertInstanceOf(Collection::class, $this->collection);
        $this->assertInstanceOf(Collection::class, Collection::make());
    }

    // More collection test operation here..
}
