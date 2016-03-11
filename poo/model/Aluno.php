<?php

include 'Pessoa.php';
class Aluno extends Pessoa{
   private $nome; 
   private $turma;
   private $matricula;
   
   function getNome() {
       return $this->nome;
   }

   function getTurma() {
       return $this->turma;
   }

   function getMatricula() {
       return $this->matricula;
   }

   function setNome($nome) {
       $this->nome = $nome;
   }

   function setTurma($turma) {
       $this->turma = $turma;
   }

   function setMatricula($matricula) {
       $this->matricula = $matricula;
   }

     
  
  public function frequencia($nome_aluno , $turma_aluno , $matricula_aluno) {
      echo   $nome_aluno  . ' de matricula ' . $matricula_aluno  . ' esta presente na aula';
  }
  
}

?>