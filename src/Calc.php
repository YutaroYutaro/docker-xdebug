<?php
declare(strict_types=1);
namespace Tests;

class Calc
{
    public function add(int $x, int $y) : int
    {
        return ($x + $y);
    }

    public function sub(int $x, int $y) : int
    {
        return ($x - $y);
    }
}