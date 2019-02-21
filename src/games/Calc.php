<?php

namespace BrainGames\games\Calc;
use function BrainGames\GameEngine\game;

const TASK = 'What is the result of the expression?';
const SIGNS = ['+', '-', '*'];

function run()
{
    $GameData = function () {
        $firstNumber = rand(1, 10);
        $sign = SIGNS[array_rand(SIGNS)];
        $secondNumber = rand(1, 10);
        $question = "{$firstNumber} {$sign} {$secondNumber}";
        $answer = (string)(calculate($firstNumber, $secondNumber, $sign));
        return [$question, $answer];
    };
    game(TASK, $GameData);
}

function calculate($firstNumber, $secondNumber, $sign)
{
    switch ($sign) {
        case '+':
            return $firstNumber + $secondNumber;
            break;
        case '-':
            return $firstNumber - $secondNumber;
            break;
        case '*':
            return $firstNumber * $secondNumber;
            break;
    }
}
