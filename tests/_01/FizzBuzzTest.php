<?php

namespace Test\_01;

use App\_01\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public static function dataProviderForFizzBuzz(): \Generator
    {
        yield 'Should return one' => [
            'number' => 1,
            'expected' => 1,
        ];
        yield 'Should return two' => [
            'number' => 2,
            'expected' => 2,
        ];
        yield 'Should return Fizz for 3' => [
            'number' => 3,
            'expected' => 'Fizz',
        ];
        yield 'Should return four' => [
            'number' => 4,
            'expected' => 4,
        ];
        yield 'Should return Buzz for 5' => [
            'number' => 5,
            'expected' => 'Buzz',
        ];
        yield 'Should return Fizz foe 6' => [
            'number' => 6,
            'expected' => 'Fizz',
        ];
        yield 'Should return FizzBuzz for 15' => [
            'number' => 15,
            'expected' => 'FizzBuzz',
        ];
        yield 'Should return Buzz for 100' => [
            'number' => 100,
            'expected' => 'Buzz',
        ];
        yield 'Should return FizzBuzz for 45' => [
            'number' => 45,
            'expected' => 'FizzBuzz',
        ];
    }

    /**
     * @dataProvider dataProviderForFizzBuzz
     */
    public function testFizzBuzz(int $index, $expected)
    {
        $fizzBuzz = new FizzBuzz();
        $fizzBuzz->fizzBuzz();
        $this->assertEquals($expected, $fizzBuzz->getValue($index));
    }

    public function testFizzBuzzOne()
    {
        $fizzBuzz = new FizzBuzz();
        $fizzBuzz->fizzBuzz();
        $this->assertEquals(1, $fizzBuzz->getValue(1));
    }
}
