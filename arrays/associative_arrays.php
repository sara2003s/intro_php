<?php

// Declaração e inicialização de array associativo
$diasSemana = [
    "dom" => "Domingo",
    "seg" => "Segunda-feira",
    "ter" => "Terça-feira",
    "qua" => "Quarta-feira",
    "qui" => "Quinta-feira",
    "sex" => "Sexta-feira",
    "sab" => "Sábado",
];

echo $diasSemana["seg"] . PHP_EOL;

foreach ($diasSemana as $key => $value) {
    echo "$key -> $value" . PHP_EOL;
}
