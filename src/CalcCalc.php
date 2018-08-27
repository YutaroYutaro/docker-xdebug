<?php
declare(strict_types=1);
namespace Tests;

class CalcCalc
{
    public function multiply(int $x, int $y) : int
    {
        return ($x * $y);
    }

    public function remainder (int $x, int $y) : int
    {
        return ($x % $y);
    }
}