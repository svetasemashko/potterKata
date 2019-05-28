<?php
namespace Tests\Models;

use app\Models\BookStore;
use PHPUnit\Framework\TestCase;

class BaseControllerTest extends TestCase
{
    public function testCountFullPriceBooks()
    {
        $bookStore = new BookStore();

        $price = $bookStore->countFullPriceBooks(2);
        $this->assertEquals(8*2, $price);
    }

    public function testCountDiscountPriceBooks()
    {
        $bookStore = new BookStore();

        $price = $bookStore->countDiscountBooks(3);
        $this->assertEquals(8*3*0.9, $price);
    }
}