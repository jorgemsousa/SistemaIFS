<?php

   class Conexao{

    private $host, $user, $senha, $banco;


    /*Método construtor do banco de dados*/
    function __construct(){

          $this->host = "localhost";
          $this->user = "root";
          $this->senha = "";
          $this->banco = "DB_Aprender";

          try{
            if($this->Conectar() == null){
                $this->Conectar();
            }              
          }catch (Exception $e){
            exit('<h2>Erro ao Conectar ao Banco de Dados</h2><br>'.$e->getMessage());
          }

    }
         
    private function Conectar(){
        $options = array( 
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        );
        $link = new PDO("mysql:host={$this->host}; dbname={$this->banco}", $this->user, $this->senha, 
        $options);
        return $link;
    }  

    function ExecutaSQL($query){
        $this->obj = $this->Conectar()->prepare($query);
        return $this->obj->execute();
    }
    

    function ListarDados(){
        return $this->obj->fetchAll(PDO::FETCH_OBJ);
    }
    
    function Contador(){
        return $this->obj->rowCount();
    }

  
}


