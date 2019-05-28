<?php
namespace app\Models;

use \app\Models\BookStore;

class Purchaser {

    public $bookStore;

    public function __construct(BookStore $bookStore)
    {
        $this->bookStore = $bookStore;
    }

    public function getPrice($numberOfFullPriceBooks, $numberOfDiscountBooks)
    {
        return $this->bookStore->countBasketPrice($numberOfFullPriceBooks, $numberOfDiscountBooks);
    }
}