<?php

function somaValores(int ...$numbers): int
{
    $total = 0;

    foreach ($numbers as $number) {
        $total += $number;
    }

    return $total;
}

echo somaValores(10, 5, 100, 150) . PHP_EOL;
echo somaValores(33, 10) . PHP_EOL;
echo somaValores(33) . PHP_EOL;

