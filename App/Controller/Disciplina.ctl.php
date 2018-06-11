<?php 

	require_once('../Model/Disciplina.class.php');


	$disciplinas = new Disciplina();

	if (isset($_POST['nomeDisciplina']) && trim($_POST['nomeDisciplina']) != null){
		$disciplinas->InserirDisciplinas($_POST['nomeDisciplina']);
	    	if (true) {

				echo "<script>alert('Cadastro Efetuado com Sucesso!!!');</script>";
                echo "<script>location.href='../View/cadastro.php';</script>";
              				
			}
			else{
				
				echo "<script>alert('Erro ao tentar efetuar cadastro!!!');</script>";
                echo "<script>location.href='../View/cadastro.php';</script>";
				
			}
	}

	$lDisciplinas = $disciplinas->ListaDisciplinas();

	


?>


