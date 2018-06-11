<?php 

require_once("Conexao.class.php");
/**
* 
*/
class Adm
{

	
 private $idadministra;
 private $nomeadministra;
 private $emailadministra;
 private $senhaadministra;

     public function getIdadministra(){
        return $this->idadministra;
    }

    public function getNomeadministra(){
    	return $this->nomeadministra;
    }

    public function getEmailadministra(){
    	return $this->emailadministra;
    }

    public function getsenhaadministra(){
    	return $this->senhaadministra;
    }

    public function setIdadministra($value){
        $this->idadministra = $value;
    }

    public function setNomeadministra($value){
        $this->nomeadministra = $value;
    }

    public function setEmailadministra($value){
        $this->emailadministra = $value;
    }

    public function setSenhaadministra($value){
        $this->senhaadministra = $value;
    }

    public function ListaAdm(){

      $dados = new Conexao();

      $sql = "SELECT * FROM administra ORDER BY nomeadministra";
      $dados->ExecutaSQL($sql);
      $lista = $dados->ListarDados();

      return $lista;
    }

    public function InserirAdm($nome, $email, $senha){

       $recebe = new Conexao();

       $query = "INSERT INTO administra (nomeadministra, emailadministra, senhaadministra) VALUES ('$nome', '$email', '$senha')";
       $recebe->ExecutaSQL($query);
       
    }

    public function ExcluirAdm($id){

          $exclui = new Conexao();

          $sql = "SELECT * FROM administra WHERE idadministra = '$id'";
          $exclui->ExecutaSQL($sql);
          $exclui->Contador();

          if($exclui->Contador() > 0){
              $query = "DELETE FROM administra WHERE idadministra = '$id'"; 
              $exclui->ExecutaSQL($query); 
          }
    }

    
    public function EditaAdm($id, $nome, $email, $senha){

          $edita = new Conexao();

          $query = "UPDATE administra SET nomeadministra = '$nome', emailadministra = '$email', senhaadministra = '$senha' WHERE idadministra = '$id'";

          $edita->ExecutaSQL($query); 

    }

}

?>