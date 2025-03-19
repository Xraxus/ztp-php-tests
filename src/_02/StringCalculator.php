<?php

namespace App\_02;

class StringCalculator
{
    public function add(string $input): int
    {
        return array_sum(str_split($input));
    }
}
