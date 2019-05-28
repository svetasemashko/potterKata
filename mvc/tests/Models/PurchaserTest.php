<?php
namespace Tests\Models;

use app\Models\BookStore;
use app\Models\Purchaser;
use PHPUnit\Framework\TestCase;

class PurchaserTest extends TestCase
{
    public function testGetPrice()
    {
        $bookStore = new BookStore();
        $purchaser = new Purchaser($bookStore);
        $price = $purchaser->getPrice(2, 2);
        $this->assertEquals(2*8+2*8*0.95, $price);
    }
}