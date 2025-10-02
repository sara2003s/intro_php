<?php

$lavouOCarro = true;
$limpouOQuintal = false;
$lavarAGaragem = false;

echo "Só vai ao cinema se lavar o carro e limpar o quintal" . PHP_EOL;

echo "Saída com o operador lógico (And)" . PHP_EOL;
if ($lavouOCarro and $limpouOQuintal and $lavarAGaragem) {
    echo "Toma esses R$ 200,00 e vai curtir!" . PHP_EOL;
} else {
    echo "Hoje tu vai assistir é Netflix!" . PHP_EOL;
}

echo "-------------------------------------" . PHP_EOL;

echo "Saída com o operador lógico (Or)" . PHP_EOL;

if ($lavouOCarro or $limpouOQuintal or $lavarAGaragem) {
    echo "Toma esses R$ 200,00 e vai curtir!" . PHP_EOL;
} else {
    echo "Hoje tu vai assistir é Netflix!" . PHP_EOL;
}

echo "-------------------------------------" . PHP_EOL;

echo "Saída com o operador lógico (Xor)" . PHP_EOL;

if ($lavouOCarro xor $limpouOQuintal xor $lavarAGaragem) {
    echo "Toma esses R$ 200,00 e vai curtir!" . PHP_EOL;
} else {
    echo "Hoje tu vai assistir é Netflix!" . PHP_EOL;
}

