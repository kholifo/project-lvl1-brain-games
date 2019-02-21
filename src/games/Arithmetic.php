<?php

namespace BrainGames\games\Arithmetic;
use function BrainGames\GameEngine\game;

const TASK = 'What number is missing in the progression?';
const AMOUNT = 10;

function run()
{
    $getGameData = function () {
        $number = rand(1, 10);
        $step = rand(1, 10);

        $i = $number + $step * AMOUNT - 1;

        $hideElement = rand(0, AMOUNT - 1);

        $progression = range($number, $i, $step);
        $progressionWithHiddenElement = array_slice($progression, 0);
        $answer = (string) $progression[$hideElement];
        $progressionWithHiddenElement[$hideElement] = '..';

        $question = implode(' ', $progressionWithHiddenElement);

        return [$question, "{$answer}"];
    };

    game(TASK, $getGameData);
}
