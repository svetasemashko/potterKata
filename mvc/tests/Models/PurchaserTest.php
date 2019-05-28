<?php
namespace Tests\Models;

use app\Models\BookStore;
use app\Models\Purchaser;
use PHPUnit\Framework\TestCase;

class PurchaserTest extends TestCase
{
    public function testGetBooks()
    {
        $bookStore = new BookStore();
        $purchaser = new Purchaser($bookStore);
        $price = $purchaser->getBooks([
            [
                'id' => 1,
                'copies' => 3
            ],
            [
                'id' => 2,
                'copies' => 2
            ],
            [
                'id' => 3,
                'copies' => 5
            ],
        ]);
        $this->assertEquals(8*3*0.9+(2+1+4)*8, $price);
    }
}