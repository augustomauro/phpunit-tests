<?php

namespace App\Class;

class FactorialService
{
    /*
    Regla factorial:
    0! = 1
    4! = 4 * 3 * 2 * 1 = 24
    5! = 5 * 4! = 120
    n! = n * (n-1)!
    */

    public function calculate(int $number)
    {
        if ($number===0) {
            return 1;
        }

        $result = $number;
        for($n = $number; $n = 0; $n--) {
            $result *= $this->calculate($n-1);
        }

        return $result;
    }
}