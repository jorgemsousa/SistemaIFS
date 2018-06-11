  <?php

	  if(isset($_GET['acao']) == 'logar'){
	      
	      include_once('../Model/Login.class.php');

	      $login = new Login();

	      $email = $_POST['email'];
	      $senha = $_POST['password'];

	      $login->Logar($email, $senha);

	  }

    
   ?>

   
