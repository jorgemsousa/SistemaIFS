<?php 

require_once("Conexao.class.php");
/**
* 
*/
class Serie
{
	
private $idserie;
private $nomeserie;
private $disciplina_iddisciplina;

public function getIdserie()
{
    return $this->idserie;
}

public function setIdserie($idserie)
{
    return $this->idserie = $idserie;
}

public function getNomeserie()
{
    return $this->nomeserie;
}

public function setNomeserie($nomeserie)
{
    return $this->nomeserie = $nomeserie;
}

public function getDisciplina_iddisciplina()
{
    return $this->disciplina_iddisciplina;
}

public function setDisciplina_iddisciplina($disciplina_iddisciplina)
{
    return $this->disciplina_iddisciplina = $disciplina_iddisciplina;
}

public function ListaSeries(){

  $dados = new Conexao();

  $sql = "SELECT * FROM serie ORDER BY nomeserie";
  $dados->ExecutaSQL($sql);
  $lista = $dados->ListarDados();

  return $lista;
}


public function InserirSeries($serie){

       $recebe = new Conexao();

       $query = "INSERT INTO serie (nomeserie) VALUES ('$serie')";
       $recebe->ExecutaSQL($query);

}


}

 ?>