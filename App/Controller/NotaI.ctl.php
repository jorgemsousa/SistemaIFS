<?php 

require_once('../Model/Nota.class.php');

 $notas = new Nota();

	$serie = $_POST['lserie'];
	$aluno = $_POST['laluno'];
	$disciplina = $_POST['ldisciplina'];
	$nomeNota = $_POST['nomenota']; 
	$dataNota = $_POST['datanota'];
	$valorNota = $_POST['valornota'];

	if(isset($nomeNota, $dataNota, $valorNota) && trim($nomeNota, $valorNota) != null){
		
	    $notas->InserirNotas($aluno, $serie, $disciplina, $nomeNota, $valorNota, $dataNota);
	        if (true) {

				echo "<script>alert('Cadastro Efetuado com Sucesso!!!');</script>";
	            echo "<script>location.href='../View/cadastro.php';</script>";
	          				
			}
			else{
				
				echo "<script>alert('Erro ao tentar efetuar cadastro!!!');</script>";
	            echo "<script>location.href='../View/cadastro.php';</script>";
				
			}

	}




 ?>