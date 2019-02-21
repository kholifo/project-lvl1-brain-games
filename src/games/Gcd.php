<?php

namespace BrainGames\games\Gcd;
use function BrainGames\GameEngine\game;

const TASK = 'Find the greatest common divisor of given numbers.';

function run()
{
    $getGameData = function () {
        $firstNumber = rand(1, 100);
        $secondNumber = rand(1, 100);

        $question = "{$firstNumber} {$secondNumber}";
        $answer = (string)(gcd($firstNumber, $secondNumber));

        return [$question, $answer];
    };

    game(TASK, $getGameData);
}

function gcd($a, $b)
{
    return ($a % $b) ? gcd($b, $a % $b) : $b;
}
