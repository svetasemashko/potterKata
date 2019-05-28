<?php
namespace app\Models;

class BookStore
{
    public $bookPrice = 8;

    public $numberOfBooks = [
        [
            'number' => 1,
            'discount' => 1
        ],
        [
            'number' => 2,
            'discount' => 0.95
        ],
        [
            'number' => 3,
            'discount' => 0.9
        ],
        [
            'number' => 4,
            'discount' => 0.85
        ],
        [
            'number' => 5,
            'discount' => 0.75
        ],
        [
            'number' => 6,
            'discount' => 0.7
        ],
        [
            'number' => 7,
            'discount' => 0.65
        ],
    ];

    public function countFullPriceBooks($numberOfBooks)
    {
        return $this->bookPrice * $numberOfBooks;
    }

    public function countDiscountBooks($numberOfBooks)
    {
        foreach ($this->numberOfBooks as $number) {
            if ($number['number'] === $numberOfBooks) {
                return $this->bookPrice * $number['number'] * $number['discount'];
            };
        }
    }
}