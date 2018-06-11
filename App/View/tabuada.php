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
    <title>PortalAprender - Tabuada</title>
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

    <!--Daterangepiker -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/3/css/bootstrap.css" />
    <!--/ -->
    
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="../assets/css/styles.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
      #resultado {
            font-size: 24px;
            font-family: "AMAZON__";
            src:url('assets/arquivos/AMAZON__.TTF') format('truetype');
      }
    </style>
</head> 

<body class="body-pink">
    <div class="page-wrapper">
        <!-- ******Header****** -->
        <header id="header" class="header">
            <div class="container">
                <div class="branding">
                    <h1 class="logo">
                        <a href="index.php">
                            <span aria-hidden="true" class="icon_document_alt icon"></span>
                            <span class="text-highlight">Portal</span><span class="text-bold">Aprender</span>
                        </a>
                    </h1>
                </div><!--//branding-->
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Tabuada</li>
                </ol>
            </div><!--//container-->
        </header><!--//header-->
        <div class="doc-wrapper">
            <div class="container">
                <div id="doc-header" class="doc-header text-center">
                    <h1 class="doc-title"><span aria-hidden="true" class="icon icon_cone_alt"></span> Tabuada</h1>
                    <div class="meta"><i class="fa fa-clock-o"></i> Ultima Atualização: <?php $data = date('M Y'); echo $data; ?></div>
                </div><!--//doc-header-->
                <div class="doc-body">
                    <div class="doc-content">
                        <div class="content-inner">
                            <section id="dashboards" class="doc-section">
                                <h2 class="section-title">Tabuada</h2>
                                <div class="section-block">
                                    <p>Escolha a operação e o valor que deseja da sua tabuada!!!</p>
                                   <div class="form-group col-sm-4"> 
                                    <select class="form-control" id="valor" required="required">
                                        <option value="">Escolhha o Valor</option>
                                      <?php 
                                        for ($i=1; $i <= 10 ; $i++) { 
                                          echo ("<option value='".$i."'>".$i."</option>");
                                        }
                                      ?>
                                    </select>                             
                                   </div>
                                    <div class="form-group col-sm-4"> 
                                    <select class="form-control" id="operacao" required="required">
                                        <option value="">Escolhha a Operação</option>
                                        <option value="+">Adição +</option>
                                        <option value="-">Subtração -</option>
                                        <option value="*">Multiplicação *</option>
                                        <option value="/">Divisão /</option>
                                    </select>                             
                                   </div>
                                   <button class="btn btn-cta btn-pink" onclick="calculaTabuada(document.getElementById('valor').value);"><i class="fa fa-external-link"></i>Executar</button>
                                   <h1>Resultado</h1>
                                   <div id="resultado"></div>


                                        <script type="text/javascript">
                                            
                                             function calculaTabuada(numero) {
                                             if (isNaN(numero)){
                                                     alert('Informe número ou operação válidos!');
                                                     return; //sai da função
                                                 }
                                                 var n = parseInt(numero); //converte para number
                                                 if (n <= 0) {
                                                    alert('Informe um número válido para calcular a tabuada!');
                                                    exit;
                                                 }
                                                 var sinal = document.getElementById('operacao').value;
                                                 var div = document.getElementById('resultado');
                                                 if(sinal == '+'){
                                                    var html = 'Calculando tabuada do ' + n + ' Adição...<br/>';
                                                   for (var operador = 0; operador <= 10; operador++) {
                                                        
                                                         var resultado = n + operador;
                                                         html += n + ' + ' + operador + ' = ' + resultado + '<br/>'; 
                                                      sinal;
                                                   }
                                                   div.innerHTML = html;
                                                 }else if(sinal == '-'){
                                                    var html = 'Calculando tabuada do ' + n + ' Subtração...<br/>';
                                                   for (var operador = 0; operador <= 10; operador++) {
                                                        
                                                         var resultado = n - operador;
                                                         html += n + ' - ' + operador + ' = ' + resultado + '<br/>'; 
                                                      sinal;
                                                   }
                                                   div.innerHTML = html;
                                                 }else if(sinal == '*'){
                                                    var html = 'Calculando tabuada do ' + n + ' Multiplicação...<br/>';
                                                   for (var operador = 0; operador <= 10; operador++) {
                                                        
                                                         var resultado = n * operador;
                                                         html += n + ' x ' + operador + ' = ' + resultado + '<br/>'; 
                                                      sinal;
                                                   }
                                                   div.innerHTML = html;
                                                 }else if(sinal == '/'){

                                                    var html = 'Calculando tabuada do ' + n + ' Divisão...<br/>';
                                                   for (var operador = 0; operador <= 10; operador++) {
                                                        
                                                         var resultado = n / operador;
                                                         html += n + ' / ' + operador + ' = ' + resultado + '<br/>'; 
                                                      
                                                   }
                                                   div.innerHTML = html;
                                                 }
                                                 
                                             }
                                        </script>

                                      
                                </div><!--//section-block-->
                            </section><!--//section dashboards-->    
                            
                        </div><!--//content-inner-->
                    </div><!--//doc-content-->
                    <div class="doc-sidebar">
                        <nav id="doc-nav">
                            <ul id="doc-menu" class="nav doc-menu hidden-xs" data-spy="affix">
                                <li><a class="scrollto" href="#dashboards">Tabuada</a></li>
                                
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
    
    <!-- Include Date Range Picker -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
    
</body>
</html> 

