<?php 

require_once('../Model/Nota.class.php');


    $notas = new Nota();

	   
   if(isset($_POST['alunos'], $_POST['serie']) && trim($_POST['alunos'], $_POST['serie']) != null){   	
    
    
     $lNotas = $notas->ListaNotasAluno($_POST['alunos'], $_POST['serie']);
     
	      if($lNotas){
		     foreach ($lNotas as $key => $value) {
		     	echo "<tr>";
                echo '<td>'.$value->nomedisciplina.'</td><td>'.$value->nomenota.'</td><td>'.$value->valornota.'</td>';
                echo "</tr>";
		     }
	      }else{
	      	echo "<tr><td>Nenhum dado foi encontrado</td></tr>";
	      }
    }

 ?>	

