<?php

use App\Item;
use PHPUnit\Framework\TestCase;

class ItemTest extends TestCase
{
    public function testDescriptionIsNotEmpty()
    {
        $item = new Item;
        $this->assertNotEmpty($item->getDescription());
    }
    public function testIDisAndInteger()
    {
        $item = new Item();
        $this->assertIsInt($item->getId());
    }
}