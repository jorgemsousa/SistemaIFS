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
    <title>PortalAprender - Extras</title>
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

<body>
    <div class="page-wrapper">
        <!-- ******Header****** -->
        <header id="header" class="header">
            <div class="container">
                <div class="branding">
                    <h1 class="logo">
                        <a href="index.php">
                            <span aria-hidden="true" class="icon_documents_alt icon"></span>
                            <span class="text-highlight">Portal</span><span class="text-bold">Agil</span>
                        </a>
                    </h1>
                </div><!--//branding-->
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Extras</li>
                </ol>
            </div><!--//container-->
        </header><!--//header-->
        <div class="doc-wrapper">
            <div class="container">
                <div id="doc-header" class="doc-header text-center">
                    <h1 class="doc-title"><span aria-hidden="true" class="icon icon_genius"></span> Extras</h1>
                    <div class="meta"><i class="fa fa-clock-o"></i> Ultima Atualização: 01 Jul 2017</div>
                </div><!--//doc-header-->
                <div id="showcase" class="doc-body">
                    <div class="doc-content">
                        <div class="content-inner">
                            <section id="premium-themes" class="doc-section">
                                
                               <section id="vogais" class="doc-section">
                               <h2 class="section-title">Vogais</h2>
                                <div class="section-block">

                                    <h1 class="question"><i class="fa fa-question-circle"></i> A, E, I, O, U</h1>
                                    <h1 class="question"><i class="fa fa-question-circle"></i> a, e, i, o, u</h1>

                                 </div><!--//section-block-->
                               </section>
                               <section id="consoantes" class="doc-section">
                               <h2 class="section-title">Consoantes</h2>
                                <div class="section-block">

                                    <h1 class="question"><i class="fa fa-question-circle"></i> B, C, D, F, G, H, J, K, L, M, N, P, Q, R, S, T, V, W, X, Y, Z</h1>
                                    <h1 class="question"><i class="fa fa-question-circle"></i> b, c, d, f, g, h, j, k, l, m, n, p, q, r, s, t, v, w, x, y, z</h1>

                                 </div><!--//section-block-->
                               </section>
                                <section id="ordinais" class="doc-section">
                               <h2 class="section-title">Números Ordinais</h2>
                                <div class="section-block">

                                    <h1 class="question"><i class="fa fa-question-circle"></i> Masculino<br>
                                        1.º – primeiro<br>
                                        2.º – segundo<br>
                                        3.º – terceiro<br>
                                        4.º – quarto<br>
                                        5.º – quinto<br>
                                        6.º – sexto<br>
                                        7.º – sétimo<br>
                                        8.º – oitavo<br>
                                        9.º – nono<br>
                                        10.º – decimo</h1>
                                    <h1 class="question"><i class="fa fa-question-circle"></i> Feminino<br> 
                                        1.ª – primeira<br>
                                        2.ª – segunda<br>
                                        3.ª – terceira<br>
                                        4.ª – quarta<br>
                                        5.ª – quinta<br>
                                        6.ª – sexta<br>
                                        7.ª – sétima<br>
                                        8.ª – oitava<br>
                                        9.ª – nona<br>
                                        10.ª – décima</h1>

                                 </div><!--//section-block-->
                               </section>
                               <section id="romanos" class="doc-section">
                               <h2 class="section-title">Números Romanos</h2>
                                <div class="section-block">

                               <table class="table table-bordered"><tbody><tr><th>Número</th><th>Número Romano</th><th>Cálculo</th></tr><tr><td>0</td><td>não existe</td><td></td></tr><tr><td>1</td><td>I</td><td>1</td></tr><tr><td>2</td><td>II</td><td>1+1</td></tr><tr><td>3</td><td>III</td><td>1+1+1</td></tr><tr><td>4</td><td>IV</td><td>5-1</td></tr><tr><td>5</td><td>V</td><td>5</td></tr><tr><td>6</td><td>VI</td><td>5+1</td></tr><tr><td>7</td><td>VII</td><td>5+1+1</td></tr><tr><td>8</td><td>VIII</td><td>5+1+1+1</td></tr><tr><td>9</td><td>IX</td><td>10-1</td></tr><tr><td>10</td><td>X</td><td>10</td></tr></tbody></table>
                               </div><!--//section-block-->
                               </section>

                            </section><!--//doc-section-->                        
                            
                                                        
                        </div><!--//content-inner-->
                    </div><!--//doc-content-->
                    <div class="doc-sidebar">
                        <nav id="doc-nav">
                            <ul id="doc-menu" class="nav doc-menu hidden-xs" data-spy="affix">
                                <li><a class="scrollto" href="#vogais">Vogais</a></li>
                                <li><a class="scrollto" href="#consoantes">Consoantes</a></li>
                                <li><a class="scrollto" href="#ordinais">Números Ordinais</a></li>
                                <li><a class="scrollto" href="#romanos">Números Romanos</a></li>
                                
                            </ul><!--//doc-menu-->
                        </nav>
                    </div><!--//doc-sidebar-->
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

