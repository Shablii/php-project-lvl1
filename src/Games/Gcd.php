<?php

namespace Brain\Games\Games\Gcd;

function getQuestion(): string
{
    $randomNum1 = rand(1, 10);
    $randomNum2 = rand(1, 10);
    $question = "{$randomNum1} {$randomNum2}";
    return $question;
}

function getRightAnsver(string $question): int
{
    [$randomNum1, $randomNum2] = explode(" ", $question);
    $minNum = ($randomNum1 >= $randomNum2) ? (int) $randomNum2 : (int) $randomNum1 ;
    while ((int) $minNum >= 1) {
        if ($randomNum1 % $minNum === 0 && $randomNum2 % $minNum === 0) {
            return (int) $minNum;
        }
        (int) $minNum--;
    }
}
