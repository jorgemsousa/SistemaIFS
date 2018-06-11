<?php 

require_once('../Controller/Aluno.ctl.php');
require_once('../Controller/Adm.ctl.php');
require_once('../Controller/Serie.ctl.php');
require_once('../Controller/Disciplina.ctl.php');

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
    <title>PortalAprender - Cadastro</title>
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

<body class="body-purple">
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
                    <li class="active">Cadastros</li>
                </ol>
            </div><!--//container-->
        </header><!--//header-->
        <div class="doc-wrapper">
            <div class="container">
                <div id="doc-header" class="doc-header text-center">
                    <h1 class="doc-title"><span aria-hidden="true" class="icon icon_lifesaver"></span> Cadastros</h1>
                    <div class="meta"><i class="fa fa-clock-o"></i> Ultima Atualização: <?php $data = date('M Y'); echo $data; ?></div>
                </div><!--//doc-header-->
                <div class="doc-body">
                    <div class="doc-content">
                        <div class="content-inner">
                            <section id="adm" class="doc-section">
                                <h2 class="section-title">ADM</h2>
                                <div class="section-block">
                                    <h3 class="question"><i class="fa fa-question-circle"></i>Cadastro de Administradores</h3>
                                    <form name="cadAdm" method="POST" action="../Controller/Adm.ctl.php">
                                        <div class="form-group">
                                            <label for="nome">Nome do Administrador</label>
                                            <input type="text" class="form-control" name="nome" placeholder="Nome" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Endereço de e-mail</label>
                                            <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label for="senha">Senha</label>
                                            <input type="password" class="form-control" name="senha" placeholder="Password" required="required">
                                        </div>
                                        <button type="submit" class="btn btn-success">Enviar</button>
                                    </form> 
                                       <h3>Lista de Administradores</h3>
                                      <table class="table table-bordered">
                                        <thead>
                                            <tr>                                                                 
                                              <th style="text-align: center">ID</th>
                                              <th style="text-align: center">Nome</th>
                                              <th style="text-align: center">E-mail</th>
                                              <th style="text-align: center">Editar</th>
                                              <th style="text-align: center">Deletar</th>
                                              
                                            </tr>
                                        </thead>
                                        <tbody style="text-align: center;">
                                           
                                            <?php 

                                               foreach ($lAdm as $key => $value) {
                                                   echo "<tr><td>".$value->idadministra."</td><td>".$value->nomeadministra."</td><td>".$value->emailadministra."</td><td><a href='editaAdm.php'><button type='button'id='editar' class='btn btn-warning btn-xs'>Editar</button></a></td><td><a href='excluiAdm.php'><button type='submit' class='btn btn-danger btn-xs'>Excluir</button></a></td></tr>";
                                               }

                                            ?>                                                               
                                                                                    
                                        </tbody>
                                    </table>
                                </div><!--//section-block-->
                            </section>
                            <section id="aluno" class="doc-section">
                              <h2 class="section-title">ALUNO</h2>
                                <div class="section-block">
                                    <h3 class="question"><i class="fa fa-question-circle"></i> Cadastro de Aluno</h3>
                                    <form name="cadAluno" method="POST" action="../Controller/Aluno.ctl.php">
                                        <div class="form-group">
                                            <label for="nome">Nome do Aluno</label>
                                            <input type="text" class="form-control" name="nomeAluno" placeholder="Aluno" required="required">
                                        </div>
                                        
                                        <button type="submit" class="btn btn-success">Enviar</button>
                                    </form>
                                </div><!--//section-block-->
                            </section>
                            <section id="disciplina" class="doc-section">  
                              <h2 class="section-title">DISCIPLINA</h2>  
                                <div class="section-block">
                                    <h3 class="question"><i class="fa fa-question-circle"></i> Cadastro de Disciplina</h3>
                                    <form name="cadDisciplina" method="POST" action="../Controller/Disciplina.ctl.php">
                                        <div class="form-group">
                                            <label for="nome">Nome da Disciplina</label>
                                            <input type="text" class="form-control" name="nomeDisciplina" placeholder="Disciplina" required="required">
                                        </div>
                                        
                                        <button type="submit" class="btn btn-success">Enviar</button>
                                    </form>
                                </div><!--//section-block-->
                            </section>

                            <section id="serie" class="doc-section">
                              <h2 class="section-title">SÉRIE</h2>
                                <div class="section-block">
                                    <h3 class="question"><i class="fa fa-question-circle"></i> Cadastro de Série</h3>
                                    <form name="cadSerie" method="POST" action="../Controller/Serie.ctl.php">
                                                                                
                                        <div class="form-group">
                                            <label for="nomeserie">Nome da Série</label>
                                            <input type="text" class="form-control" name="nomeSerie" placeholder="Série" required="required">
                                        </div>
                                        <button type="submit" class="btn btn-success">Enviar</button>
                                        
                                    </form>

                                </div><!--//section-block-->
                            </section>

                            <section id="nota" class="doc-section">
                              <h2 class="section-title">NOTA</h2>
                                <div class="section-block">
                                    <h3 class="question"><i class="fa fa-question-circle"></i> Cadastro de Nota</h3>
                                    <form class="form-inline" name="cadNotas" method="POST" action="../Controller/NotaI.ctl.php?acao=inserenota">

                                       
                                        <div class="form-group" style="padding-right:10px;">
                                            <label for="alunos">Aluno</label>

                                                <select class="form-control" name="laluno" required="required"> 
                                                <option value="">Informe o Aluno</option>               
                                                <?php
                                                  foreach ($lAlunos as $key => $value) {
                                                    echo '<option value='.$value->idaluno.'>'.$value->nomealuno.'</option>';
                                                  }
                                                ?> 
                                                </select>
                                        </div> 

                                        <div class="form-group" style="padding-right:10px;">
                                            <label for="serie">Série</label>
                                                <select class="form-control" name="lserie" required="required">
                                                <option value="">Informe a Série</option>
                                                 <?php
                                                    
                                                 foreach ($lSeries as $key => $value) {
                                                    echo '<option value='.$value->idserie.'>'.$value->nomeserie.'</option>';
                                                  }

                                                ?>
                                                </select>
                                        </div>  


                                        <div class="form-group" style="padding-right:10px;">
                                            <label for="disc">Disciplina</label>
                                                <select class="form-control" name="ldisciplina" required="required"> 
                                                <option value="">Informe a Disciplina</option> 
                                                <?php
                                                  foreach ($lDisciplinas as $key => $value) {
                                                    echo '<option value='.$value->iddisciplina.'>'.$value->nomedisciplina.'</option>';
                                                  }
                                                ?> 
                                                </select>
                                        </div> <br><br>
                                        <div class="form-group">
                                            <label for="nota">Nome da Nota</label>
                                            <input type="text" class="form-control" name="nomenota" placeholder="Nome da Nota" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label for="nota">Data da Nota</label>
                                            <input type="date" class="form-control" name="datanota" placeholder="Data da Nota" required="required">
                                        </div>    
                                        <div class="form-group">
                                            <label for="nota">Nota</label>
                                            <input type="number" class="form-control" name="valornota" placeholder="Nota" step="0.010" required="required">
                                        </div>
                                        
                                        <button type="submit" class="btn btn-success">Enviar</button>
                                    </form>
                                  </div><!--//section-block-->                                                       
                            </section>
                        </div><!--//content-inner-->
                    </div><!--//doc-content-->
                    <div class="doc-sidebar">
                        <nav id="doc-nav">
                            <ul id="doc-menu" class="nav doc-menu hidden-xs" data-spy="affix">
                                <li><a class="scrollto" href="#adm">ADM</a></li>
                                <li><a class="scrollto" href="#aluno">Alunos</a></li>
                                <li><a class="scrollto" href="#disciplina">Disciplinas</a></li>
                                <li><a class="scrollto" href="#serie">Série</a></li>
                                <li><a class="scrollto" href="#nota">Notas</a></li>
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

