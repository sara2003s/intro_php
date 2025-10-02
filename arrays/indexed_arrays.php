<?php

$diasSemana = [
    "Domingo",
    "Segunda-feira",
    "Terçca-feira",
    "Quarta-feira",
    "Quinta-feira",
    "Sexta-feira",
    "Sábado"
];

echo $diasSemana[0] . PHP_EOL;
echo $diasSemana[1] . PHP_EOL;
echo $diasSemana[2] . PHP_EOL;
echo $diasSemana[3] . PHP_EOL;
echo $diasSemana[4] . PHP_EOL;
echo $diasSemana[5] . PHP_EOL;
echo $diasSemana[6] . PHP_EOL;

foreach ($diasSemana as $key => $dia) {
    echo $key + 1 . "º dia da semana: $dia" . PHP_EOL;
}