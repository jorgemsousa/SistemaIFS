<?php 
require_once('Conexao.class.php');
/**
* 
*/
class Login
{
  
  public function Logar($email , $senha){

        $dados = new Conexao();
        
        $query = "SELECT * FROM administra WHERE emailadministra = '$email' AND senhaadministra = '$senha'";
        
        $dados->ExecutaSQL($query);
        $retorno = $dados->Contador();
       
        if($retorno == 1){
           session_start();
           $_SESSION['autenticacao'] = TRUE;
           
           echo "<script>alert('Bem vindo ao nosso Portal!!!');</script>";
           echo "<script>location.href='../View/index.php';</script>";
          // header('Location:../View/index.php');
        }
        else
        {
           
           echo "<script>alert('Algo deu Errado!!! Tente denovo ou Contacte o Administrador.');</script>";
           echo "<script>location.href='../index.php';</script>";           
          // header('Location:../index.php');
        }      
      
  }


  

}
 

?>