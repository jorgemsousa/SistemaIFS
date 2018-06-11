<?php 
require_once('../Controller/Aluno.ctl.php');
require_once('../Controller/Serie.ctl.php');
require_once('../Controller/Nota.ctl.php');

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
    <title>PortalAprender - Boletim</title>
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
    <link rel="stylesheet" href="../assets/plugins/elegant_font/css/style.css">
    <link rel="stylesheet" href="../assets/plugins/elegant_font/css/bootstrap.css">
   
    
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
    
</head> 

<body class="body-green">
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
                    <li class="active">Boletim</li>
                </ol>
            </div><!--//container-->
        </header><!--//header-->
        <div class="doc-wrapper">
            <div class="container">
                <div id="doc-header" class="doc-header text-center">
                    <h1 class="doc-title"><i class="icon fa fa-barcode"></i> BOLETIM</h1>
                    <div class="meta"><i class="fa fa-clock-o"></i> Ultima Atualização: <?php $data = date('M Y'); echo $data; ?></div>
                </div><!--//doc-header-->
                <div class="doc-body">
                    <div class="doc-content">
                        <div class="content-inner">
                            <section id="relatorio-section" class="doc-section">
                                <h2 class="section-title">Boletim de Notas</h2>
                                <div class="section-block col-md-12">
                                    <p>Para ver o boletim do <a href="#">ALUNO</a>, selecione o aluno e a série nos campos abaixo e em seguida clique no botão consultar Notas!!!
                                    </p>
                                   <div class="pull-left col-md-12">
                                      <div class="row col-md-12">
                                        <form class="form-group" method="post" action="../Controller/Nota.ctl.php" id="frmBusca">
                                        <div class="form-group col-md-4">
                                                <label for="alunos">Selecione o Aluno:</label>
                                               
                                                <select class="form-control" id="alunos" name="alunos" required="required"> 
                                                <option value="">Informe o Aluno</option>
                                                <?php  

                                                  foreach ($lAlunos as $key => $value) {
                                                    echo '<option value='.$value->idaluno.'>'.$value->nomealuno.'</option>';
                                                  }

                                                ?>                                                      
                                                </select><br>

                                                <label for="alunos">Selecione a Série:</label>
                                               
                                                <select class="form-control" id="serie" name="serie" required="required">
                                                <option value="">Informe a Série</option>
                                                <?php
                                                    
                                                 foreach ($lSeries as $key => $value) {
                                                    echo '<option value='.$value->idserie.'>'.$value->nomeserie.'</option>';
                                                  }

                                                ?>

                                                </select>
                                        </div>                                                                                   
                                        <div class="col-md-12">
                                          <button type="button" id="gerar" class="btn btn-green" data-toggle="modal"><i class="fa fa-list-alt"></i> Consultar Notas</button> 
                                        </form>
                                        </div>   
                                     </div>
                                      <!--Modal Relatório de Notas-->
                                      <div class="modal fade modal-lg-center" id="modal-notas" data-backdrop="static">
                                          <div class="modal-dialog modal-lg">
                                               <div class="modal-content">
                                                   <div class="modal-header">
                                                         <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
                                                         <h4 class="modal-title">Acompanhamento de Notas</h4>
                                                   </div>
                                                   <div class="modal-body">
                                                        <table class="table table-bordered">
                                                            <thead>
                                                                <tr>                                                                 
                                                                  <th style="text-align: center">Disciplina</th>
                                                                  <th style="text-align: center">Nome da Nota</th>
                                                                  <th style="text-align: center">Valor da Nota</th>
                                                                  
                                                                </tr>
                                                            </thead>
                                                            <tbody id="resultado">
                                                               
                                                                                                        
                                                            </tbody>
                                                        </table>    
                                                   </div>
                                                   <div class="modal-footer">
                                                          <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                                                </div>
                                            </div>
                                            </div>
                                        </div><!--/Modal Relatório de Notas-->

                                </div>
                                
                            </section><!--//doc-section-->
                            
                                                                                                                                                         
                                                   
                        </div><!--//content-inner-->
                    </div><!--//doc-content-->
                    <div class="doc-sidebar hidden-xs">
                        <nav id="doc-nav">
                            <ul id="doc-menu" class="nav doc-menu" data-spy="affix">
                                <li><a class="scrollto" href="#relatorio-section">Boletim de Notas</a></li>
                                                               
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
   <script>  
    $('#gerar').click( function(){                 
                $.ajax({
                    url:'../Controller/Nota.ctl.php',
                    method: 'post',
                    data: $('#frmBusca').serialize(),
                    success: function(data){                
                        $('#resultado').html(data);          
                        $('#modal-notas').modal('show');
                    }
                });
            });
     
    </script> 
    <!-- Main Javascript -->          
    <script type="text/javascript" src="../assets/plugins/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../assets/plugins/prism/prism.js"></script>    
    <script type="text/javascript" src="../assets/plugins/jquery-scrollTo/jquery.scrollTo.min.js"></script>                                                                
    <script type="text/javascript" src="../assets/plugins/jquery-match-height/jquery.matchHeight-min.js"></script>
    <script type="text/javascript" src="../assets/js/main.js"></script>
    
    <script src="../assets/js/janelas.js" type="text/javascript"></script>
    
    <!-- Include Date Range Picker -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
    <script src="../assets/js/daterange.js" type="text/javascript"></script>
   

</body>
</html> 

