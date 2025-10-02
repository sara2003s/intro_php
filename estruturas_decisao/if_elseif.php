<?php

$idade = 17;
$mensagem = "";

if ($idade <= 12) {
    $mensagem = "criança";
} elseif ($idade > 12 && $idade < 18) {
    $mensagem = "adolecente";
} elseif ($idade >= 18 && $dade < 60) {
    $mensagem = "adulto(a)";
} else {
    $mensagem = "idoso(a)";
}

echo "Você é uma pessoa $mensagem";