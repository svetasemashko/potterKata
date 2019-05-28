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
    public function testGetBooks($data)
    {
        $bookStore = new BookStore();
        $purchaser = new Purchaser($bookStore);
        $price = $purchaser->getBooks($data['array']);
        $this->assertEquals($data['result'], $price);
    }

    /**
     * @return array
     */
    public function booksProvider()
    {
        return [
            [
                [
                    'array' => [
                        [
                            'id' => 1,
                            'copies' => 1
                        ],
                    ],
                    'result' => 8,
                ],
                [
                    'array' => [
                        [
                            'id' => 1,
                            'copies' => 3
                        ],
                        [
                            'id' => 2,
                            'copies' => 3
                        ],
                    ],
                    'result' => 8*2*0.95+(2+2)*8,
                ],
                [
                    'array' => [
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
            ],
        ];
    }
}