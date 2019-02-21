<?php
namespace BrainGames\GameEngine;

use function \cli\line;
use function \cli\prompt;

const ROUNDS = 3;

function game($TASK, $getGameData)
{
    line("Welcome to the Brain Game!");
    line($TASK . PHP_EOL);
    $name = prompt("May I have your name?", false, ' ');
    line("Hello, {$name}!" . PHP_EOL);
    for ($currentRound = 1; $currentRound <= ROUNDS; $currentRound += 1) {
        [$question, $answer] = $getGameData();
        
        line("Question: {$question}");
        $currentAnswer = prompt("Your answer");
        
        if ($currentAnswer === $answer) {
            line("Correct!");
        } else {
            line("'{$currentAnswer}' is wrong answer ;(. Correct answer was '{$answer}'");
            line("Let`s try again, {$name}!");
            return;
        }
    }
    line("Congratulations, {$name}!");
}
