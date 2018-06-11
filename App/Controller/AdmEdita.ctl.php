<?php 

 require_once("../Model/Adm.class.php");

	
	$admin = new Adm();

	if (isset($_POST['id'],$_POST['nome'], $_POST['email'], $_POST['senha']) && trim($_POST['email'], $_POST['senha']) != null){
			$admin->EditaAdm($_POST['id'], $_POST['nome'], $_POST['email'], $_POST['senha']);

			if (true) {

				echo "<script>alert('Cadastro Editado com Sucesso!!!');</script>";
                echo "<script>location.href='../View/cadastro.php';</script>";
              				
			}
			else{
				
				echo "<script>alert('Erro ao tentar efetuar edição do cadastro!!!');</script>";
                echo "<script>location.href='../View/cadastro.php';</script>";
				
			}
	}

?>
