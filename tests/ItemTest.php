<?php

use App\Item;
use App\ItemChild;
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
        $item = new ItemChild();
        $this->assertIsInt($item->getId());
    }
    public function testTokenIsAString
    {
        $item = new ItemChild();
        $this->assertIsString($item->getToken());
    }
}