<?php

function removeDuplicateCharacters ($match) {
    $letterCounts = array_count_values(str_split($match));
    $highestOccurrence = max($letterCounts);
    return $highestOccurrence === 1;
}

function solution($string) {
    $matches = [];

    for ($i = 0; $i < strlen($string); $i++) {
        for ($j = 1; $j < strlen($string); $j++) {
            $substring = substr($string, $i, ($j - 1));
            $matches[] = $substring;
        } 
    }

    $uniqueSubstrings = array_filter($matches, 'removeDuplicateCharacters');
    $answer = max($uniqueSubstrings);
    return strlen($answer);
}

$inputString = ($argc > 1 ? filter_var($argv[1], FILTER_SANITIZE_STRING) : false);

if ($inputString) {
    echo solution($inputString) . PHP_EOL;
}
