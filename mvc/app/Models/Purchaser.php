<?php
namespace app\Models;

class Purchaser {

    private $bookStore;

    private $numberOfDiscountBooks;

    private $bookCopies = 0;

    public function __construct(BookStore $bookStore)
    {
        $this->bookStore = $bookStore;
    }

    private function getPrice()
    {
        $discountBooks = $this->bookStore->countDiscountBooks($this->numberOfDiscountBooks);
        $fullPriceBooks = $this->bookStore->countFullPriceBooks($this->bookCopies);

        return $discountBooks + $fullPriceBooks;
    }

    public function getBooks(array $books)
    {
        $this->numberOfDiscountBooks = count($books);

        foreach ($books as $book) {
                $this->bookCopies = $this->bookCopies + $book['copies'] - 1;
        }

        return $this->getPrice();
    }
}