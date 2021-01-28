<?php

namespace Brain\Games\Cli;

use function cli\line;
use function cli\prompt;

function hello()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?', $default = false, $marker = ' ');
    line("Hello, %s!", $name);
    return $name;
}
