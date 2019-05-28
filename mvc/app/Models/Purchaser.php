<?php
namespace app\Models;

use \app\Models\BookStore;

class Purchaser {

    public $bookStore;

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

    public function __construct(BookStore $bookStore)
    {
        $this->bookStore = $bookStore;
    }

    public function getPrice($numberOfFullPriceBooks, $numberOfDiscountBooks)
    {
        return $this->bookStore->countBasketPrice($numberOfFullPriceBooks, $numberOfDiscountBooks);
    }

    public function getBooks(array $books)
    {
        $numberOfDiscountBooks = count($books);

        $discountBooks = $this->bookStore->countDiscountPriceBooks($numberOfDiscountBooks);

        $copies = 0;

        foreach ($books as $book) {
            $copies = $copies + $book['copies'] - 1;

        }
        $fullPriceBooks = $this->bookStore->countFullPriceBooks($copies);
        return $discountBooks + $fullPriceBooks;
    }
}