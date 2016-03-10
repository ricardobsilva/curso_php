<?php
include '../model/Aluno.php';

$aluno = new Aluno();
$aluno->setNome('Joao');
$aluno->frequencia($aluno->getNome(), null,null);