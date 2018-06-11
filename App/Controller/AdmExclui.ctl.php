<?php 

 require_once("../Model/Adm.class.php");

	
	$admin = new Adm();

	if (isset($_POST['id']) && trim($_POST['id']) != null){
			$admin->ExcluirAdm($_POST['id']);

			if (true) {

				echo "<script>alert('Cadastro Excluido com Sucesso!!!');</script>";
                echo "<script>location.href='../View/cadastro.php';</script>";
              				
			}
			else{
				
				echo "<script>alert('Erro ao tentar efetuar exclusão do cadastro!!!');</script>";
                echo "<script>location.href='../View/cadastro.php';</script>";
				
			}
	}

?>