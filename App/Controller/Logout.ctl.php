<?php 

 
if(isset($_GET['acao']) == 'logout'){
     
     session_start();
     $_SESSION['autenticacao'] = FALSE;
     header('Location:../index.php');
}
    
    

 ?>