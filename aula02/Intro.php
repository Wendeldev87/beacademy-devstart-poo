<?php

include './Aluno.php';

$aluno = new Aluno(); // instância de Aluno
$a1->nome = 'Wendel';
$a1->cpf = '018.536.856-00';
$a1->idade = 25;
$a1->nota = [5.5, 6.5, 7.5];

$aluno1 = [
    'nome' => 'Mateus',
    'cpf' => '018.536.856-00',
    'idade' => 23,
    'nota' => [5.5, 6.5, 7.5]
];

$aluno2 = [
    'nome' => 'Isadora',
    'cpf' => '862.459.654-00',
    'idade' => 26,
    'nota' => [6.5, 7.5, 8.5]
];