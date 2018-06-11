<?php 

require_once("Conexao.class.php");

class Aluno {

private $idaluno;
private $nomealuno;

public function getIdaluno(){
    return $this->idaluno;
}

public function getNomealuno(){
	return $this->nomealuno;
}

public function setIdaluno($value){
    $this->idaluno = $value;
}

public function setNomealuno($value){
	$this->nomealuno = $value;
}


  public function ListaAlunos(){

  $dados = new Conexao();

  $sql = "SELECT * FROM aluno ORDER BY nomealuno";
  $dados->ExecutaSQL($sql);
  $lista = $dados->ListarDados();

  return $lista;
}

public function InserirAlunos($aluno){

       $recebe = new Conexao();

       $query = "INSERT INTO aluno (nomealuno) VALUES ('$aluno')";
       $recebe->ExecutaSQL($query);

}

}
?>