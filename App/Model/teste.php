<?php 
require_once("Adm.class.php");
require_once("Aluno.class.php");
require_once("Disciplina.class.php");
require_once("Serie.class.php");
require_once('Nota.class.php');
/*
$dados = new Conexao();
$sql = "SELECT * FROM disciplina";
$dados->ExecutaSQL($sql);
$lista = $dados->ListarDados();
*/

//$dados = new Adm();
//$lista = $dados->ListaAdm();

/*$dados = new Adm();
$lista = $dados->ListaAdm();

echo '<pre>';
foreach ($lista as $value) {
	echo ' '.$value->idadministradores.'-'.$value->nomeadm.' '.$value->emailadm;
}
echo '</pre>'; */




    $notas = new Nota();   
  

	$lNotas = $notas->ListaNotasAluno(1, 1);
    
    echo '<pre>';
    foreach ($lNotas as $key => $value) {
    	echo $value->valornota.'<br>';
    }
    echo '</pre>';
 

    

?>