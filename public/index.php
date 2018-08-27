<?php

declare(strict_types=1);

$test = 10;

echo $test . "<br>";

$arrayTest = [1, 2, 3];
$arrayZero = [];

echo(CheckBool(EchoLoop($arrayTest)));
echo(CheckBool(EchoLoop($arrayZero)));
echo(CheckBool("true"));

function EchoLoop(array $arr): bool{
    if (count($arr) == 0) return false;

    foreach ($arr as $value){
        echo $value . "<br>";
    }

    return true;
}

function CheckBool(bool $bool): string {
    return $bool ? "exist array.<br>" : "not exist array.<br>";
}