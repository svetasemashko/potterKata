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

    public $numberOfFullPriceBooks;

    public $numberOfDiscountPriceBooks;

    public function countFullPriceBooks($numberOfFullPriceBooks)
    {
        return $this->bookPrice * $numberOfFullPriceBooks;
    }

    public function countDiscountPriceBooks($numberOfDiscountPriceBooks)
    {
        foreach ($this->numberOfBooks as $number) {

            if ($number['number'] == $numberOfDiscountPriceBooks) {
                return $this->bookPrice * $number['number'] * $number['discount'];
            };
        }
    }

    public function countBasketPrice($numberOfFullPriceBooks, $numberOfDiscountPriceBooks)
    {
        $fullAmount = $this->countFullPriceBooks($numberOfFullPriceBooks);
        $reducedAmount = $this->countDiscountPriceBooks($numberOfDiscountPriceBooks);

        $finalPrice = $fullAmount + $reducedAmount;

        return $finalPrice;
    }
}