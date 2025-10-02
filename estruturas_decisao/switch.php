<?php

$idade = 59;
$mensagem = "";

switch ($idade) {
    case $idade <= 12:
        $mensagem = "criança";
        break;
    case $idade > 12 && $idade < 18:
        $mensagem = "adolecente";
        break;
    case $idade >= 18 && $idade < 60:
        $mensagem = "adulto(a)";
        break;
    default:
        $mensagem = "idoso(a)";
        break;
}

echo "Você é uma pessoa $mensagem";