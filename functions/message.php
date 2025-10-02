<?php
// Definição da função saudacao()
function saudacao(): void
{
    echo "Seja bem vindo ao mundo da programação web!\n";
}

// Declara a função saudacaoParam com um parâmetro do tipo string
function saudacaoParam(string $name = "Fulano"): string
{
    return "Seja bem vindo(a), $name, ao mundo da programação web!\n";
}

function soma(int $n1, int $n2): int
{
    return $n1 + $n2;
}

saudacao();
echo saudacaoParam("Mirella");
echo saudacaoParam("Valéria");
echo saudacaoParam("Sara");
echo saudacaoParam();
echo soma(10, 34) . PHP_EOL;
echo soma(109, 498) . PHP_EOL;
