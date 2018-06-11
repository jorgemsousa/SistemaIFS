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
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->    
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="assets/plugins/elegant_font/css/style.css">
    
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
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
                
            </div><!--//container-->
        </header><!--//header-->
        
        <section class="cards-section text-center">
            <div class="container" >              
                
             <div class="panel panel-primary">
              <div class="panel-heading">Informe seu E-mail e Senha para ter acesso ao Portal</div>
               <div class="panel-body">

                <div class="col-xs-12 col-md-12 text-center">
                    <figure id="avatar">                        
                        <img src="assets/images/demo/login.png" alt="imagem de login" class="img-circle"/>
                    </figure>
                </div>                
               
                <form class="form-horizontal" method="post" action="Controller/Login.ctl.php?acao=logar" id="frmloga">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                       <div class="input-group col-sm-10"> 
                        <span class="input-group-addon">@</span> 
                        <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                       </div> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Senha</label>
                    <div class="col-sm-10">
                      <div class="input-group col-sm-10">
                         <span class="input-group-addon">'#</span>  
                         <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-6">
                      <button id="logando" type="submit" class="btn btn-success btn-block">Acessar</button>
                    </div>
                  </div>
                </form>
              </div>  
             </div>   
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
    <script type="text/javascript" src="assets/plugins/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>                                                                     
    <script type="text/javascript" src="assets/plugins/jquery-match-height/jquery.matchHeight-min.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    
</body>
</html> 

