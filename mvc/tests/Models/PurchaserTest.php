<?php
namespace Tests\Models;

use app\Models\BookStore;
use app\Models\Purchaser;
use PHPUnit\Framework\TestCase;

class PurchaserTest extends TestCase
{
    /**
     * @dataProvider booksProvider
     */
    public function testGetBooks($books, $result)
    {
        $bookStore = new BookStore();
        $purchaser = new Purchaser($bookStore);
        $price = $purchaser->getBooks($books);
        $this->assertEquals($result, $price);
    }

    /**
     * @return array
     */
    public function booksProvider()
    {
        return [
            'oneBookOneCopy' => [
                'books' => [
                    [
                        'id' => 1,
                        'copies' => 1
                    ],
                ],
                'result' => 8,
            ],
            'oneBookSeveralCopies' => [
                'books' => [
                    [
                        'id' => 1,
                        'copies' => 3
                    ],
                ],
                'result' => 8*3,
            ],
            'severalBooksOneCopy' => [
                'books' => [
                    [
                        'id' => 1,
                        'copies' => 1
                    ],
                    [
                        'id' => 2,
                        'copies' => 1
                    ],
                ],
                'result' => 8*2*0.95,
            ],
            'severalBooksSeveralCopies' => [
                'books' => [
                    [
                        'id' => 1,
                        'copies' => 3
                    ],
                    [
                        'id' => 2,
                        'copies' => 10
                    ],
                    [
                        'id' => 3,
                        'copies' => 1
                    ],
                ],
                'result' => 8*3*0.9+(2+9)*8,
            ],
        ];
    }
}