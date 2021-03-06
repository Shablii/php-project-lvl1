<?php

namespace Brain\Games\Games\Prime;

use function Brain\Games\Engine\getResultGame;

const QUESTION_FOR_TASK = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPime(int $question): bool
{
    if ($question <= 1) {
        return false;
    } else {
        for ($i = 2; $i <= round(sqrt($question)); $i++) {
            if (($question % $i === 0)) {
                return false;
            }
        }
    }
    return true;
}

function startGame(): string
{
    $getTaskGamePrime = function (): array {
        $question = rand(1, 56);

        $rightAnswer = isPime($question) ? "yes" : "no";

        return ['question' => $question, 'rightAnswer' => $rightAnswer];
    };

    return getResultGame($getTaskGamePrime, QUESTION_FOR_TASK);
}
