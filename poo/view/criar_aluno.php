<?php
include '../model/Aluno.php';

$aluno = new Aluno();
$aluno->setCpf('60546565');
$aluno->setNome('Joao');
echo $aluno->getCpf();

//$aluno->frequencia($aluno->getNome(), null,null);