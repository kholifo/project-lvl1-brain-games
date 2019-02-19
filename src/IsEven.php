<?php
namespace BrainGames\IsEven;
use function \cli\line;
use function \cli\prompt;
const ROUNDS = 3;
function run()
{
    line('Welcome to the Brain Games!');
    line('Answer "yes" if number even otherwise answer "no".' . PHP_EOL);
    $name = prompt('May I have your name?');
    line("Hello, {$name}!" . PHP_EOL);
    $rounds = 3;
    for ($currentRound = 0; $currentRound < $ROUNDS; $currentRound++) {
        $question = rand(1, 100);
        $correctAnswer = isEven($question) ? 'yes' : 'no';
        line('Question: ' . $question);
        $answer = prompt('Your answer');

        if ($answer === $correctAnswer) {
            line('Correct!');
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            line("Let's try again, {$name}!" . PHP_EOL);
            return;
        }
    }
    line("Congratulations, {$name}!");
}
function isEven($number)
{
    return $number % 2 === 0;
}
