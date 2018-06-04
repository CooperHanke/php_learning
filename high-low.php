<?php

// Goal: To have a guessing game, where the players guess a number between
//      1 and 100.

$number = rand(1, 100);
$guesses = 0;
$won = false;
fwrite(STDOUT, 'Guess a number between 1 and 100: ');
$guess = fgets(STDIN);
do {
    if ($guess == $number) {
        fwrite(STDOUT, "You guessed the number! It took you {$guesses} guesses to win!\n");
        exit(0);
    } elseif ($guess < $number) {
        fwrite(STDOUT, "You were too low! Try again!\n");
    } elseif ($guess > $number) {
        fwrite(STDOUT, "You were too high! Try again!\n");
    } else {
        fwrite(STDOUT, "That answer is invalid! Try again!\n");
    }
    fwrite(STDOUT, 'Guess a number between 1 and 100: ');
    $guess = fgets(STDIN);
    $guesses++;
} while (!$won);