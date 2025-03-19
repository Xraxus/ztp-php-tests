<?php

namespace App\_02;

class FizzBuzz
{
    private array $data = [];

    public function fizzBuzz()
    {
        for ($i = 1; $i <= 100; ++$i) {
            if ($this->isDivisibleByFifteen($i)) {
                $this->data[$i] = 'FizzBuzz';
            } elseif ($this->isDivisibleByThree($i)) {
                $this->data[$i] = 'Fizz';
            } elseif ($this->isDivisibleByFive($i)) {
                $this->data[$i] = 'Buzz';
            } else {
                $this->data[$i] = $i;
            }
        }
    }

    public function value($number): int|string
    {
        return $this->data[$number];
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
