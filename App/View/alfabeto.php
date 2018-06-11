<?php 

   session_start();

   if($_SESSION['autenticacao'] != true){
      header('Location: ../index.php');
   }

?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>PortalAprender - Alfabeto</title>
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
    <link rel="stylesheet" href="../assets/plugins/prism/prism.css">
    <link rel="stylesheet" href="../assets/plugins/lightbox/dist/ekko-lightbox.min.css">
    <link rel="stylesheet" href="../assets/plugins/elegant_font/css/style.css">

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="../assets/css/styles.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head> 

<body class="body-blue">
    <div class="page-wrapper">
        <!-- ******Header****** -->
        <header id="header" class="header">
            <div class="container">
                <div class="branding">
                    <h1 class="logo">
                        <a href="index.php">
                            <span aria-hidden="true" class="icon_documents_alt icon"></span>
                            <span class="text-highlight">Portal</span><span class="text-bold">Aprender</span>
                        </a>
                    </h1>
                </div><!--//branding-->
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Alfabeto</li>
                </ol>
            </div><!--//container-->
        </header><!--//header-->
        <div class="doc-wrapper">
            <div class="container">
                <div id="doc-header" class="doc-header text-center">
                    <h1 class="doc-title"><span aria-hidden="true" class="icon icon_clock_alt"></span> Alfabeto</h1>
                    <div class="meta"><i class="fa fa-clock-o"></i> Ultima Atualização: <?php $data = date('M Y'); echo $data; ?></div>
                </div><!--//doc-header-->
                <div class="doc-body">
                    <div class="doc-content">
                        <div class="content-inner">
                         <div class="row">  
                           <img src="../assets/images/demo/ab.png" class="img-responsive" alt="Imagem responsiva">
                           <img src="../assets/images/demo/cd.png" class="img-responsive" alt="Imagem responsiva">
                           <img src="../assets/images/demo/ef.png" class="img-responsive" alt="Imagem responsiva">
                           <img src="../assets/images/demo/gh.png" class="img-responsive" alt="Imagem responsiva">
                           <img src="../assets/images/demo/ij.png" class="img-responsive" alt="Imagem responsiva">
                           <img src="../assets/images/demo/kl.png" class="img-responsive" alt="Imagem responsiva">
                           <img src="../assets/images/demo/mn.png" class="img-responsive" alt="Imagem responsiva">
                           <img src="../assets/images/demo/op.png" class="img-responsive" alt="Imagem responsiva">
                           <img src="../assets/images/demo/qr.png" class="img-responsive" alt="Imagem responsiva">
                           <img src="../assets/images/demo/st.png" class="img-responsive" alt="Imagem responsiva">
                           <img src="../assets/images/demo/uv.png" class="img-responsive" alt="Imagem responsiva">
                           <img src="../assets/images/demo/wx.png" class="img-responsive" alt="Imagem responsiva">
                           <img src="../assets/images/demo/yz.png" class="img-responsive" alt="Imagem responsiva">
                          </div>
                          <br><br>
                            <div class="embed-responsive embed-responsive-16by9">
                               <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/DBAuR19EiuI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            </div>           
                                                
                                
                            
                                                        
                        </div><!--//content-inner-->
                    </div><!--//doc-content-->
                    
                </div><!--//doc-body-->              
            </div><!--//container-->
        </div><!--//doc-wrapper-->
        
        <div id="promo-block" class="promo-block promo-block-2">
            <div class="container">
                <div class="promo-block-inner">
                    <h3 class="promo-title text-center"><i class="fa fa-copyright"></i> <a href="#" target="_blank">PORTAL APRENDER - Compartilhar é Saber</a></h3>
                    <div class="row">
                        <div class="figure-holder col-md-5 col-sm-6 col-xs-12">
                            <div class="figure-holder-inner">
                                <a href="#" target="_blank"><img class="img-responsive" src="../assets/images/demo/quadro.png" alt="Cronograma" /></a>
                                <a class="mask" href="#"><i class="icon fa fa-heart pink"></i></a>
                            </div>
                        </div><!--//figure-holder-->
                        <div class="content-holder col-md-7 col-sm-6 col-xs-12">
                            <div class="content-holder-inner">
                                <div class="desc">
                                  <h4 class="content-title"><strong>IFS - Instituto Federal de Sergipe.</strong></h4>
                                  <p>Humildade, devemos aprende-la todos os dias observando as crianças quando estão brincando entre si.</p>
                                </div><!--//desc-->
                                
                            </div><!--//content-holder-inner-->
                        </div><!--//content-holder-->
                    </div><!--//row-->
                </div><!--//promo-block-inner-->  
            </div><!--//container-->
        </div><!--//promo-block-->
        
    </div><!--//page-wrapper-->
    
    <footer id="footer" class="footer text-center">
        <div class="container">
            <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other license options via our website: themes.3rdwavemedia.com */-->
            <small class="copyright">Desenvolvido by <a href="#">Jorge Meneses Sousa</a> 2018 - <?php $data = date('Y'); echo $data; ?></small>
            
        </div><!--//container-->
    </footer><!--//footer-->
   
    <!-- Main Javascript -->          
    <script type="text/javascript" src="../assets/plugins/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../assets/plugins/prism/prism.js"></script>    
    <script type="text/javascript" src="../assets/plugins/jquery-scrollTo/jquery.scrollTo.min.js"></script>  
    <script type="text/javascript" src="../assets/plugins/lightbox/dist/ekko-lightbox.min.js"></script>                                                                
    <script type="text/javascript" src="../assets/plugins/jquery-match-height/jquery.matchHeight-min.js"></script>
    <script type="text/javascript" src="../assets/js/main.js"></script>
    
</body>
</html> 

