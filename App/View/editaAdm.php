<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="pt-br"> <!--<![endif]-->  
<head>
    <title>PortalAprender - Home</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">    
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->    
    <link rel="stylesheet" href="../assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="../assets/plugins/elegant_font/css/style.css">
    
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="../assets/css/styles.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head> 

<body class="landing-page" style="background: #f9f9fb">   
     
       
    <div class="page-wrapper">
        
        <!-- ******Header****** -->
        <header class="header text-center">
            <div class="container">
                <div class="branding">
                    <h1 class="logo">
                        <span aria-hidden="true" class="icon_documents_alt icon"></span>
                        <span class="text-highlight">Portal</span><span class="text-bold">Aprender</span>
                    </h1>
                </div><!--//branding-->
                <div class="tagline">
                    <p>O nosso portal destina-se aos pais de crianças que estão se alfabetizando. </p>
                    
                </div><!--//tagline-->
              <span class="pull-left">
                <ol class="breadcrumb">
                    <li><a href="cadastro.php">Cadastros</a></li>
                    <li class="active">Editar Administradores</li>
                </ol>
               </span> 
            </div><!--//container-->
        </header><!--//header-->
        
        <section class="cards-section text-center">
            <div class="container" >              
                
               <h3 class="question">Alteração de Administradores</h3>
                <form name="editAdm" method="POST" action="../Controller/AdmEdita.ctl.php">
                    <div class="form-group">
                        <label for="id">ID do Administrador</label>
                        <input type="number" class="form-control" name="id" placeholder="Informe o ID" required="required">
                        <label for="nome">Nome do Administrador</label>
                        <input type="text" class="form-control" name="nome" placeholder="Informe o Nome" required="required">
                    </div>
                    <div class="form-group">
                        <label for="email">Endereço de e-mail</label>
                        <input type="email" class="form-control" name="email" placeholder="Informe o E-mail" required="required">
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" name="senha" placeholder="Informe a Senha" required="required">
                    </div>
                    <button type="submit" class="btn btn-warning">Editar</button>
                </form> 
            </div><!--//container-->
        </section><!--//cards-section-->
    </div><!--//page-wrapper-->
    
    <footer class="footer text-center">
        <div class="container">
            <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other license options via our website: themes.3rdwavemedia.com */-->
            <small class="copyright">Desenvolvido by <a href="#">Jorge Meneses Sousa</a> 2018 - <?php $data = date('Y'); echo $data; ?></small>
            
        </div><!--//container-->
    </footer><!--//footer-->
    
         
    <!-- Main Javascript -->          
    <script type="text/javascript" src="../assets/plugins/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>                                                                     
    <script type="text/javascript" src="../assets/plugins/jquery-match-height/jquery.matchHeight-min.js"></script>
    <script type="text/javascript" src="../assets/js/main.js"></script>
    
</body>
</html> 

