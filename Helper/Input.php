<?php

function inputCli(string $label): string 
{
    echo $label . ': ';
    $input = fopen('php://stdin', 'r');
    return fgets($input);
}