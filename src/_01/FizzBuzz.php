<?php

namespace App\_01;

/**
 * Class FizzBuzz.
 */
class FizzBuzz
{
    private array $values = [];

    public function fizzBuzz(): void
    {
        for ($i = 1; $i <= 100; ++$i) {
            if ($this->isDivisibleByFifteen($i)) {
                $this->values[$i] = 'FizzBuzz';
            } elseif ($this->isDivisibleByThree($i)) {
                $this->values[$i] = 'Fizz';
            } elseif ($this->isDivisibleByFive($i)) {
                $this->values[$i] = 'Buzz';
            } else {
                $this->values[$i] = $i;
            }
        }
    }

    public function getValue($index)
    {
        return $this->values[$index];
    }

    private function isDivisibleByThree(int $index): bool
    {
        return 0 === $index % 3;
    }

    private function isDivisibleByFive(int $index): bool
    {
        return 0 === $index % 5;
    }

    private function isDivisibleByFifteen(int $i): bool
    {
        return $this->isDivisibleByThree($i) && $this->isDivisibleByFive($i);
    }
}
