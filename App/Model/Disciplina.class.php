<?php 
require_once('Conexao.class.php');
/**
* 
*/
class Disciplina
{
	
	private $iddisciplina;
	private $nomedisciplina;
	

	public function getIddisciplina()
	{
	    return $this->iddisciplina;
	}
	
	public function setIddisciplina($iddisciplina)
	{
	    return $this->iddisciplina = $iddisciplina;
	}
   
    public function getNomedisciplina()
    {
        return $this->nomedisc;
    }
    
    public function setNomedisciplina($nomedisc)
    {
        return $this->nomedisciplina = $nomedisciplina;
    }

     
     public function ListaDisciplinas(){

  	  $dados = new Conexao();

	  $sql = "SELECT * FROM disciplina ORDER BY nomedisciplina asc";
	  $dados->ExecutaSQL($sql);
	  $lista = $dados->ListarDados();

	  return $lista;
	}

	 public function InserirDisciplinas($disciplina){

       $recebe = new Conexao();

       $query = "INSERT INTO disciplina (nomedisciplina) VALUES ('$disciplina')";
       $recebe->ExecutaSQL($query);



	 }

}
 ?>