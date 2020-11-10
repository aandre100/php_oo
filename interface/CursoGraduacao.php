<?php 
require_once("ICurso.php");
/**
 *
 */
class CursoGraduacao implements ICurso
{
  public string $nomeDisciplina;
  public string $nomeProfessor;

  public function disciplina(string $nomeDisciplina = 'Disciplina'){
	$this->nomeDisciplina = $nomeDisciplina;
    return "Disciplina: {$this->nomeDisciplina}<br><br>";
  }
  public function professor(string $nomeProfessor = 'Professor'){
	$this->nomeProfessor = $nomeProfessor;
	return "Professor: {$this->nomeProfessor}";

  }
}




 ?>
