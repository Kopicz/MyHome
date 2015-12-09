
<?php session_start();  ?>
<?php
if(!isset($_SESSION['usuario']) && (!isset($_SESSION['senha']))){ 
header("Location: ../index1.php");  
  }
?>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Techsoft | Gerenciamento Comercial</title>
    <style>
        .corFundo{
          background: url(../img/corFundo.png);
          background-repeat: no-repeat;
        }
        .headLogo{
          margin-bottom: 18px;
         
        }
        #btnLogin{
          margin-top: 8px;

        }
        #imgModel{
          margin-top: 7px;
          margin-bottom: 7px;
          margin-left: 15px;
          height: 180px;
          width: 540px

        }
        #lblLembrar{
          margin-left: 80%;
        }
        #logar{
          margin-left: 27%;
        }
        #divPrincipal{
          width: 80%;
          float: left;
        }
        .panelPrincipal{
          margin-left: 10%;
          width: 80%;
        }
        #divbotao{
          float: left;
        }
        .btn-info{
          width: 200px;

        }

        .endereco{
            float: right;
            text-align: right;
        }
       .img-rounded{
          float: right;
        }
    </style>
 <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>
      <!--/COMEÇO panel principal-->
<!--1-->  <div class="panel panel-primary">
<!--2-->  <div class="panel-body corFundo">
<!--COMEÇO panel principal-->
<!--Começo navbar-->
<!--3-->  <div class="headLogo">
            <img src="../img/logo.png" class="img-responsive center-block" alt="Cinque Terre" width="650" height="125">
<!--/3--> </div>

<!--4-->    <nav class="navbar navbar-default">
<!--5--><div class="container-fluid">
    
<!--6-->    <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              <a class="navbar-brand" href="http://techsoft.net.br/">Home</a>
<!--/6-->   </div>

    
<!--7-->    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="empresa.php">Empresa<span class="sr-only">(current)</span></a></li>
        <li><a href="sistema.php">Sistema</a></li>
        <li class="dropdown">
          <a href="sac.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Fale Conosco<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="contato.php">Contato</a></li>
            
            <li><a href="cases.php">Casos de Sucesso</a></li>
            <li class="divider"></li>
            <li><a href="representantes.php">Nossos Representantes</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-left">
        <li><a href="parceiros.php">Parceiros</a></li>
        <li class="dropdown">
          <a href="suporte.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Suporte<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="utilitarios.php">Utilitarios</a></li>
            <li class="disabled"><a tabindex="-1" href="perguntas.php">Perguntas Frequentes</a></li>
            <li class="divider"></li>
            <li><a href="tutoriais.php">Tutorias</a></li>              
            <li class="divider"></li>
            <li><a href="donwloads.php">Downloads</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
              <a href="?sair"><button  id="btnLogin"type="button" class="btn btn-defaut" ><span class="glyphicon glyphicon-log-out"></span> Logout</button></a>
             
            <div tabindex="-1">
              </div>
      </ul> 
<!--/7--></div>
<!--/5--> </div>
<!--/4--> </nav>
<!--Fechamento navbar-->
<!--Fechamento botoes-->



<!--Fechamento botoes-->
<!-- panel "novidades"-->
<!--/ fechamento panel principal-->
<!--/2--> </div>
<!--/1--> </div>
<!---->
<!--/ fechamento panel principal--> 
  </body>
</html>