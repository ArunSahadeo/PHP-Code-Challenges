<?php

function getKth($numbers = [], $k = false) {
    if (count($numbers) < 1 || !$k) {
        return false;
    }

    rsort($numbers);
    return $numbers[$k - 1];
}

$answer = getKth([1, 2, 3, 4, 4, 5], 3);
echo $answer . PHP_EOL;
