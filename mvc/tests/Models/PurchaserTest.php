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

    public function testGetBooks()
    {
        $bookStore = new BookStore();
        $purchaser = new Purchaser($bookStore);
        $price = $purchaser->getBooks([
            [
                'id' => 1,
                'copies' => 30
            ],
            [
                'id' => 2,
                'copies' => 2
            ],
            [
                'id' => 2,
                'copies' => 5
            ],
        ]);
        $this->assertEquals(8*3*0.9+(29+1+4)*8, $price);
    }
}