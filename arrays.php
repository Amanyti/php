<?php

/* 1 - Escreva um programa em PHP que remova os elementos duplicados de um array fornecido como entrada e exiba o array resultante. Por exemplo, se o array for [1, 2, 2, 3, 4, 4, 5], o programa deve exibir [1, 2, 3, 4, 5].

2 - Percorra um array de notas (cada uma de 0 a 10) e exiba a nota do aluno em questão com a informação se o aluno foi aprovado ou não.

Se a nota for maior do que 6, o aluno foi aprovado. Caso contrário, foi reprovado.
3 - Defina um array associativo que representa uma conta bancária (com titular e saldo) e exiba suas informações na tela.

4 - Crie um array contendo nomes de familiares seus e após sua criação adicione mais elementos ao array. */

//1 
$array = [1, 2, 2, 3, 4, 4, 5];
$semDuplicatas = array_unique($array);

//2
$notas = [10, 5.5, 3.8, 7.5, 6, 6.1, 5.9];

foreach ($notas as $nota) {
    $resultado = $nota > 6 ? "aprovado" : "reprovado";

    echo "Esse(a) aluno(a) foi $resultado com a nota $nota \n";
}

//3 
$conta = [
    'titular' => 'Vinicius Dias',
    'saldo' => 100,
];

echo $conta['titular'] . ' possui ' . $conta['saldo'] . ' reais de saldo.';

//4
$familiares = ['Alice', 'Bob', 'Charlie'];
$familiares[] = 'Davi';