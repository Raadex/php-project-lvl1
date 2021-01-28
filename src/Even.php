<?php

namespace Brain\Games\Even;

use function cli\line;
use function cli\prompt;

function brainEven($name)
{
    line("Answer \"yes\" if the number is even, otherwise answer \"no\".");
    for ($i = 0; $i < 3; $i++) {
        $num = rand(1, 100);
        $choice = prompt('Question: ' . $num, $default = false, $marker = ' ');
        line("Your answer: " . $choice);
        $result = isEven($num) ? 'yes' : 'no';
        if ($result === $choice) {
            line('Correct!');
        } else {
            line($choice . ' is wrong answer ;(. Correct answer was ' . $result);
            line("Let's try again, " . $name . "!");
            return 0;
        }
    }
    line("Congratulations, " . $name . "!");
    return 0;
}

function isEven($number)
{
    return $number % 2 === 0;
}
