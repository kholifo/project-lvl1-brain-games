<?php
namespace BrainGames\games\IsEven;
use function BrainGames\GameEngine\game;

const TASK = 'Answer "yes" if number even otherwise answer "no".';

function run()
{
    $getGameData = function () {
        $question = rand(1, 100);
        $answer = getAnswer($question);
        return [$question, $answer];
    };
    game(TASK, $getGameData);
}

function getAnswer($question)
{
    $answer = isEven($question) ? 'yes' : 'no';
    return $answer;
}

function isEven($number)
{
    return $number % 2 === 0;
}
