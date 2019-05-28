<?php
namespace Tests\Models;

use app\Models\BookStore;
use PHPUnit\Framework\TestCase;

class BaseControllerTest extends TestCase
{
    public function testCountNumberFullPriceBooks()
    {
        $bookStore = new BookStore();

        $price = $bookStore->countNumberFullPriceBooks(2);
        $this->assertEquals(16, $price);
    }
}