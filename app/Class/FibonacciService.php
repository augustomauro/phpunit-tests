<?php

namespace App\Class;

class FibonacciService
{
    /*
    Regla Fibonacci:
    La secuencia de Fibonacci es una secuencia de números, 
    donde cada número es la suma de los 2 números anteriores, 
    excepto los dos primeros números que son 0 y 1.
    n = 0, 0
    n = 1, 1
    n > 1, Fn-1 + Fn-2

    n   Fn
    0	0
    1	1
    2	1
    3	2
    4	3
    5	5
    6	8
    7	13
    8	21
    9	34
    10	55
    11	89
    12	144
    13	233
    14	377
    15	610
    16	987
    17	1597
    18	2584
    19	4181
    20	6765
    */

    public function calculate(int $number) 
    {
        if ($number > 1) {
            return ($this->calculate($number - 1) + $this->calculate($number - 2));
        }
        return $number;
    }
}