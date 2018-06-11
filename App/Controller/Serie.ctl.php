<?php 

require_once("../Model/Serie.class.php");

$series = new Serie();

    if (isset($_POST['nomeSerie']) && trim($_POST['nomeSerie']) != null){
		$series->InserirSeries($_POST['nomeSerie']);
		    if (true) {

				echo "<script>alert('Cadastro Efetuado com Sucesso!!!');</script>";
                echo "<script>location.href='../View/cadastro.php';</script>";
              				
			}
			else{
				
				echo "<script>alert('Erro ao tentar efetuar cadastro!!!');</script>";
                echo "<script>location.href='../View/cadastro.php';</script>";
				
			}
	}

$lSeries = $series->ListaSeries();

?>