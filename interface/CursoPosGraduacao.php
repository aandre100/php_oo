<?php
require_once("ICurso.php");
/**
 *
 */
class CursoPosGraduacao implements ICurso
{
  public function disciplina(string $nomeDisciplina){
    echo "Disciplina: ". $nomeDisciplina;
  }
  public function professor(string $nomeProfessor){
    echo "Professor: ". $nomeProfessor;
  }
}

 ?>
