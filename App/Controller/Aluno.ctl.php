<?php 

require_once("../Model/Aluno.class.php");

	
	$alunos = new Aluno();

	if (isset($_POST['nomeAluno']) && trim($_POST['nomeAluno']) != null){
			$alunos->InserirAlunos($_POST['nomeAluno']);
			if (true) {
 
				echo "<script>alert('Cadastro Efetuado com Sucesso!!!');</script>";
                echo "<script>location.href='../View/cadastro.php';</script>";
              				
			}
			else{
				
				echo "<script>alert('Erro ao tentar efetuar cadastro!!!');</script>";
                echo "<script>location.href='../View/cadastro.php';</script>";
				
			}
    }

	$lAlunos = $alunos->ListaAlunos();    

 ?>

 

 