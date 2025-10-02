<?php

$a = true;
$b = false;

$resposta1 = $a && $b;
$resposta2 = $a and $b;

echo var_dump($resposta1);
echo var_dump($resposta2);
echo var_dump($resposta2 = $a and $b);
