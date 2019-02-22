<?php

namespace BrainGames\games\Arithmetic;
use function BrainGames\GameEngine\game;

const TASK = 'What number is missing in the progression?';
const AMOUNT = 10;

function run()
{
    $getGameData = function () {
        $firstNumber = rand(1, 10);
        $step = rand(1, 10);

        $endNumber = $firstNumber + $step * AMOUNT - 1;

        $hiddenElementPosition = rand(0, AMOUNT - 1);

        $progression = range($firstNumber, $endNumber, $step);
        $progressionWithHiddenElement = array_slice($progression, 0);
        $answer = (string) $progression[$hiddenElementPosition];
        $progressionWithHiddenElement[$hiddenElementPosition] = '..';

        $question = implode(' ', $progressionWithHiddenElement);

        return [$question, "{$answer}"];
    };

    game(TASK, $getGameData);
}
