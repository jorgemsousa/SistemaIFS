<?php 

   session_start();

   if($_SESSION['autenticacao'] != true){
      header('Location: ../index.php');
   }



?>

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
                <span class="pull-right">
                <form name="sair" method="post" action="../Controller/Logout.ctl.php?acao=logout">
                    <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-share" aria-hidden="true"></span> Sair</button>
                </form>
                </span>
            </div><!--//container-->
        </header><!--//header-->
        
        <section class="cards-section text-center">
            <div class="container" >              
                
                <div id="cards-wrapper" class="cards-wrapper row">
                    <div class="item item-green col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <i class="icon fa fa-barcode"></i>
                            </div><!--//icon-holder-->
                            <h3 class="title">Boletim</h3>
                           <!-- <p class="intro">Relatórios, Consultas e muito mais!!!</p>-->
                            <a class="link" href="boletin.php"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                    <div class="item item-pink item-2 col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <span aria-hidden="true" class="icon icon_cone_alt"></span>
                            </div><!--//icon-holder-->
                            <h3 class="title">Tabuada</h3>
                            <!--<p class="intro">Relatórios, Correção de Pendências!</p>-->
                            <a class="link" href="tabuada.php"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                    <div class="item item-blue col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <span aria-hidden="true" class="icon icon_clock_alt"></span>
                            </div><!--//icon-holder-->
                            <h3 class="title">Alfabeto</h3>
                           <!-- <p class="intro">Monitor de PDV's, Vendas, entre outros...</p>-->
                            <a class="link" href="alfabeto.php"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                    <div class="item item-purple col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <span aria-hidden="true" class="icon icon_lifesaver"></span>
                            </div><!--//icon-holder-->
                            <h3 class="title">Cadastro</h3>
                            <!--<p class="intro">Documentações, Tutoriais e Manuais, faça você mesmo!!!</p>-->
                            <a class="link" href="cadastro.php"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                    <div class="item item-primary col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <span aria-hidden="true" class="icon icon_genius"></span>
                            </div><!--//icon-holder-->
                            <h3 class="title">Extras</h3>
                           <!-- <p class="intro">Aplicativos Extras para ajudar o associado!!! </p>-->
                            <a class="link" href="extras.php"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                    <div class="item item-orange col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <span aria-hidden="true" class="icon icon_gift_alt"></span>
                            </div><!--//icon-holder-->
                            <h3 class="title">Licença &amp; Créditos</h3>
                            <!--<p class="intro">Saiba um pouco mais sobre nós e os aplicativos que utilizamos!!!</p>-->
                            <a class="link" href="license.php"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                </div><!--//cards-->
                
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

