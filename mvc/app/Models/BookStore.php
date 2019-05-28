<?php
namespace app\Models;

class BookStore
{
    public $bookPrice = 8;

    public $numberOfBooks = [
        [
            'number' => 2,
            'discount' => 0.95
        ],
        [
            'number' => 3,
            'discount' => 0.9
        ]
    ];

    public function countNumberFullPriceBooks($numberOfFullPriceBooks)
    {
        $numberOfBooks['number'] = $numberOfFullPriceBooks;
        return $this->bookPrice * $numberOfBooks['number'];
    }

//    public function countDiscountPriceBooks()
//    {
//        return $discountPriceBooks * $numberOfBooks['number'] * $numberOfBooks['discount'];
//    }
//
//    public function countBasketPrice()
//    {
//        $fullAmount = $this->countNumberFullPriceBooks();
//        $reducedAmount = $this->countDiscountPriceBooks();
//
//        $finalPrice = $fullAmount + $reducedAmount;
//
//        return $finalPrice;
//    }
}