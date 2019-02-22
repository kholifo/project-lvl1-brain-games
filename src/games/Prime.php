<?php

namespace BrainGames\games\Prime;
use function BrainGames\GameEngine\game;

const TASK = 'Answer "yes" if given number is prime. Otherwise answer "no"';

function run()
{
    $getGameData = function () {
        $question = rand(1, 100);
        $answer = Prime($question) ? 'yes' : 'no';
        return [$question, $answer];
    };

    game(TASK, $getGameData);
}

function Prime($number)
{
    if ($number == 1) {
        return false;
    }

    for ($d = 2; $d * $d <= $number; $d++) {
        if ($number % $d == 0) {
            return false;
        }
    }

    return true;
}