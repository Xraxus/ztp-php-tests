<?php

namespace Test\_02;

use App\_02\StringCalculator;
use PHPUnit\Framework\TestCase;

class StringCalculatorTest extends TestCase
{
    public static function dataProviderForTestAdd(): \Generator
    {
        yield 'Should return 0 for an empty string' => ['', 0];
        yield 'Should return 1 for 1' => ['1', 1];
        yield 'Should return 3 for 1,2' => ['1,2', 3];
        yield 'Should return 6 for 1,2,3' => ['1,2,3', 6];
        yield 'Should return 10 for 1,2,3,4' => ['1,2,3,4', 10];
        yield 'Should return 15 for 1,2,3,4,5' => ['1,2,3,4,5', 15];
        yield 'Should return 21 for 1,2,3,4,5,6' => ['1,2,3,4,5,6', 21];
        yield 'Should return 6 for 1\n2,3' => ["1\n2,3", 6];
        yield 'Should return 6 for 1\n2,3' => ["1,2,3\n", 6];

    }

    /**
     * @dataProvider dataProviderForTestAdd
     */
    public function testAdd( string $number,  int $expectedValue): void
    {
        $stringCalculator = new StringCalculator();
        $this->assertEquals($expectedValue, $stringCalculator->add($number));
    }
}
