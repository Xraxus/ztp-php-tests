<?php

namespace Test\_02;

use App\_02\FizzBuzz;
use PHPUnit\Framework\TestCase;

/**
 * Class Example.
 */
class FizzBuzzTest extends TestCase
{

    public static function dataProviderForFizzBuzz() : \Generator
    {
        yield 'Should return 1' => [
            'number' => 1,
            'expected' => 1,
        ];
        yield 'Should return 2' => [
            'number' => 2,
            'expected' => 2,
        ];
        yield 'Should return Fizz for 3' => [
            'number' => 3,
            'expected' => 'Fizz',
        ];
        yield 'Should return 44' => [
            'number' => 44,
            'expected' => 44,
        ];
        yield 'Should return Buzz for 100' => [
            'number' => 100,
            'expected' => 'Buzz',
        ];

    }
    /**
     * @dataProvider dataProviderForFizzBuzz
     */
    public function testFizzBuzz(int $number, int|string $expected): void
    {
        // given
        $fizzBuzz = new FizzBuzz();
        $fizzBuzz->fizzBuzz();
        // when
        $actual = $fizzBuzz->value($number);
        // then
        $this->assertEquals($expected, $actual);

    }

}
