<?php
include '../model/Aluno.php';

$aluno = new Aluno();

$aluno->nome = 'Joao';

echo $aluno->nome;