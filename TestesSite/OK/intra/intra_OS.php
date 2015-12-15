
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
        #divConteudoPrincipal{
          width: 80%;
          float: left;
        }
        .panelPrincipal{
          margin-left: 10%;
          width: 80%;
        }
        #divbotao{
          width: 20%;
          float: left;
        }
        #ConteudoConsult{
          height: 300px;
          color: red;
        }
        .btn-primary{
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

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
              <?php
              if(isset($_REQUEST['sair'])){ 
                session_destroy();
                header("Location: ../index1.php");  
                }

              ?>
            <div tabindex="-1">
              </div>
      </ul> 
<!--/7--></div>
<!--/5--> </div>
<!--/4--> </nav>
<!--Fechamento navbar-->
<!--abertura divs dos conteudos-->
<!--1--> <div class="panel panel-primary">
<!--2--> <div class="panel-heading">Teste Intranet<!--/2--></div>
<!--3-->    <div class="panel-body">
<!--4 MAE DOS CONTEUDOS-->      <div>

<!--1 BOTAO-->    <div class="container-fluid" id="divBotao">
<!--2 BOTAO-->      <div class="row-fluid">
<!--3 BOTAO-->        <div class="span2">
<!--4 BOTAO-->          <div id="divBotoes">
                            <a href="consultaClient.php?page=1"> <button  type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm" width="500px">
                            <span class="glyphicon glyphicon-user" style="font-size:48px" text-align="center";></span><br>CONSULTA CLIENTES</button></a>
<!--/4 BOTAO-->         </div>
                           <p>
<!--5 BOTAO-->          <div id="divBotoes">
                          <a href="consultaprod.php?page=1"> <button id="btnMenuIntra" type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm" width="500px">
                          <span class="glyphicon glyphicon-barcode" style="font-size:48px" text-align="center";></span><br>CONSULTA PRODUTOS</button></a>
<!--/5 BOTAO-->         </div>
                        <p>
                        <div id="divBotoes">
                          <a href="consultaprod.php?page=1"> <button id="btnMenuIntra" type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm" width="500px">
                          <span class="glyphicon glyphicon-eye-open" style="font-size:48px" text-align="center";></span><br>CONSULTA FORNECEDOR</button></a>
<!--/5 BOTAO-->         </div>
                        <p>
                        <div id="divBotoes">
                          <a href="consultaprod.php?page=1"> <button id="btnMenuIntra" type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm" width="500px">
                          <span class="glyphicon glyphicon-road" style="font-size:48px" text-align="center";></span><br>WEB O.S</button></a>
<!--/5 BOTAO-->         </div>
                        <p>
                        <div id="divBotoes">
                          <a href="consultaprod.php?page=1"> <button id="btnMenuIntra" type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm" width="500px">
                          <span class="glyphicon glyphicon-fire" style="font-size:48px" text-align="center";></span><br>SUPORTE</button></a>
<!--/5 BOTAO-->         </div>
<!--/3 BOTAO-->       </div>    
<!--/2 BOTAO-->     </div>    

<!--/1 BOTAO-->  </div>   
                  
<!--consulta-->
<!--1 conteudo--><div class="panel panel-primary" id="divConteudoPrincipal"  style="background-color:#FFF" id="ConteudoConsult">
                   <div class="panel-heading" ><center><b>SEJAM BEM VINDOS!!!<!--/2--></b></center></div>
                  

                   <center><img src="../img/hack.gif" height="410"></center>
<!--/1 conteudo--></div>    
                  <!--final consulta-->


<!--/4 /MAE DOS CONTEUDOS-->     </div>
<!--/3-->   </div>  
<!--/1--> </div>


<!--fechamento das divs conteudo-->



<!--Fechamento botoes-->



<!--Fechamento botoes-->
<!-- panel "novidades"-->
<!--/ fechamento panel principal-->
<!--/2--> </div>
            <div id="footer">
              <div class="container">
                  <p>&copy; Copyright <a href="empresa.php">Techsoft </a>Sistema de Gerenciamento Comerciais</p>
                    <p><a href="http://techsoft.net.br/">Home | </a><a href="empresa.php">Empresa | </a><a href="contato.php"> Contato</a>
                  <B class="endereco">Av. Pedro Taques, 399, Lj 01 - Zona Sete - Maringá - PR - Fone/Fax:(44) 3024-9963</B></p>
              </div>
            </div>
<!--/1--> </div>
<!---->
<!--/ fechamento panel principal--> 
  </body>
</html>