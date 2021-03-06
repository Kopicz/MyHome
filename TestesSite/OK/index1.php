<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Techsoft | Gerenciamento Comercial</title>
    <link rel="shortcut icon" href="../img/icones.png" />
    <style>
        .corFundo{
          background: url(img/corFundo.png);
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
        .panelPrincipal{
          margin-left: 10%;
          width: 80%;
        }
        .endereco{
            float: right;
            text-align: right;
        }
       .img-rounded{
          float: right;
        }
    </style>
    <script src="js/jquery-1.2.6.pack.js" type="text/javascript"></script><script src="js/jquery.maskedinput-1.1.4.pack.js" type="text/javascript" /></script>
<!--bootstrap-->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--JQuery / Bootstrap-->  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!--javascript / Bootstrap-->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body>
      <!--/COMEÇO panel principal-->
        <div class="panel panel-primary">
        <div class="panel-body corFundo">
      <!--COMEÇO panel principal-->
      <!--Começo navbar-->
      <div class="headLogo">
        <img src="img/logo.png" class="img-responsive center-block" alt="Cinque Terre" width="650" height="125">
      </div>

  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="http://techsoft.net.br/">Home</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="empresa.html">Empresa<span class="sr-only">(current)</span></a></li>
        <li><a href="sistema.html">Sistema</a></li>
          <li class="dropdown">
            <a href="sac.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Fale Conosco<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="contato.html">Contato</a></li>
              <li class="divider"></li>
              <li><a href="cases.html">Casos de Sucesso</a></li>
              <li class="divider"></li>
              <li><a href="representantes.html">Nossos Representantes</a></li>
            </ul>
          </li>
      </ul>
      <ul class="nav navbar-nav navbar-left">
        <li><a href="parceiros.html">Parceiros</a></li>
        <li class="dropdown">
         <a href="suporte.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Suporte<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="utilitarios.html">Utilitarios</a></li>
            <li class="disabled"><a tabindex="-1" href="perguntas.html">Perguntas Frequentes</a></li>
            <li class="divider"></li>
            <li><a href="tutoriais.html">Tutorias</a></li>              
            <li class="divider"></li>
            <li><a href="donwloads.html">Downloads</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <button id="btnLogin"type="button" class="btn btn-defaut" data-toggle="modal" data-target=".bs-example-modal-sm"><span class="glyphicon glyphicon-log-in"></span> Login</button>
        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
          <div class="modal-dialog modal-body">
            <div class="modal-content">
              <div class="controle">
                <form class="form-signin" enctype="multipart/form-data" name="formLogin" method="post" action="validation/logar.php">
                  <img id="imgModel"src="img/logo.png" class="img-responsive" >
                  <label for="inputext" class="sr-only">Email</label>
                  <script type="text/javascript">$(document).ready(function(){  $("#usuario").mask("99.999.999/9999-99");});</script>
                  <input id="usuario" name="usuario" type="text" class="form-control" placeholder="TechSoft@TechSoft.net.br" >
                  <label  for="inputPassword" class="sr-only">Senha</label>
                  <input id="senha" name="senha" type="password" ng-model="user.senha" class="form-control" placeholder="Senha..." required>
                  <div class="checkbox">
                    <label  id="lblLembrar">
                      <input  type="checkbox" value="lembre-me"> Lembre - Me
                    </label>
                  </div>
                  <button name="logar" id="logar" class="btn btn-lg btn-primary" type="submit" >Fazer Login</button>
                  <button class="btn btn-lg btn-danger" type="submit" > Cadastre-se</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </ul> 
    </div>
  </div>
</nav>
<!--Fechamento navbar-->

<!-- panel "novidades"-->
      <div class="panel panel-primary">
        <div class="panel-heading">arquivos</div>
          <div class="panel-body">
            <div class="panelPrincipal">               
              <div>
                <h2><b>Versao</b></h2>
                  <form method="get" action="ferramentas.php">
                        <!--------------------------------------------------------------------------------------------------------------------------------------------------------->
                        <!--
                          <?php
                        /*  // definindo o tempo limite da aplicação o time default é de 30 segundos - você setando para 0  fica um tempo indefinido
                          set_time_limit(0);

                          // INFORMAÇÕES DE ACESSO AO SERVIDOR
                          $ftp_server = "ftp.techsoft.net.br"; // Nome ou IP do Servidor
                          $login      = "techsite@techsoft.net.br"; // Usuário
                          $senha      =  "webdevTechsoft";   // Senha

                          $diretorio  = "/atualiza/"; // Diretório onde deverá acessar (default)

                          // efetua a conexão
                          $conn_id = ftp_connect($ftp_server);
                          // caso ocorra algum erro de conexao
                          if(!$conn_id){
                            echo "nao foi possivel conectar ao servidor de ftp dp site ".$ftp;
                          exit;
                          }else{
                          // faz a autenticação do usuario - nessa parte sera necessário informar o login e senha
                          $login_result = ftp_login($conn_id, $login, $senha);
                          if(!$login_result){
                            echo "erro ao efetuar login haha";
                            exit;
                          }else{}
                          }
                          ?>
                            <a href="login.html">Login</a>
                          

                          <?php
                          $filename = 'versao.txt';
                          if (file_exists($filename)) {
                              echo "$filename foi modificado em: " . date ("F d Y H:i:s.", filectime($filename));
                          }
*/
                          ?>
                        -->
                        <!--------------------------------------------------------------------------------------------------------------------------------------------------------->
                        
                        <!--

                        <?php
                          $link1 = "ftp://Techsoft:";
                          $link2 = "istema2014";
                          $link3= "@177.72.160.78/atualiza";
                          $linha = file_get_contents($link1."$".$link2."".$link3."/".'versao.txt');
                              echo "<a href=".$link1."$".$link2."".$link3."/".$linha.">Versões</a>"; 
                          ?>
                     
                                <?php
                             /*
                                  link de Download
                                    $link1 = "ftp://Techsoft:";
                                  $link2 = "istema2014";
                                  $link3= "@177.72.160.78/atualiza";
                                     $versao = fopen($link1."$".$link2."".$link3."/"."versao.txt", "r");
                                     feof ($versao);
                                       $linha = fgets($versao,4096);
                                        echo "<a href=".$link1."$".$link2."".$link3."/".$linha.">Versões</a>"; 
                                   fclose ($versao);
                           
                              */?>
                          -->
                      </form>
                      </p>
                          <h2><b>Utilitarios</b></h2>
                        <p>
                     <script>
                          document.write(unescape("%20%20%20%20%20%20%20%3Ca%20href%3D%22ftp%3A//Techsoft%3A%24istema2014@177.72.160.78/downloads/AA.rar%22%3EAssistencia%20Remota%3C/a%3E%0A"));
                      </script>
                        </p>
                        <script>
                            document.write(unescape("%3Ca%20href%3D%22ftp%3A//Techsoft%3A%24istema2014@177.72.160.78/downloads/dbu.rar%22%3EDBU%3C/a%3E"));
                        </script>
                      </p>
                      
                      <p>
                        <script>
                            document.write(unescape("%3Ca%20href%3D%22ftp%3A//Techsoft%3A%24istema2014@177.72.160.78/downloads/DOSPrint.zip%22%3EDos-Print%3C/a%3E"));
                        </script>
                      </p>
                      
                      <p>
                        <script>
                            document.write(unescape("%3Ca%20href%3D%22ftp%3A//Techsoft%3A%24istema2014@177.72.160.78/downloads/impressora%2520PDF.zip%22%3EImpressora%20PDF%3C/a%3E"));
                        </script>
                      </p>
                      
                      <p>
                        <script>
                            document.write(unescape("%3Ca%20href%3D%22ftp%3A//Techsoft%3A%24istema2014@177.72.160.78/downloads/list.rar%22%3EList%3C/a%3E"));
                        </script>
                      </p>
                      
                      <p>
                        <script>
                            document.write(unescape("%3Ca%20href%3D%22ftp%3A//Techsoft%3A%24istema2014@177.72.160.78/downloads/ourXdbu.rar%22%3EourXdbu%3C/a%3E"));
                        </script>
                      </p>

                      <p>
                        <script>
                            document.write(unescape("%3Ca%20href%3D%22ftp%3A//Techsoft%3A%24istema2014@177.72.160.78/downloads/ValidSetup.rar%22%3EInstalador%20Valid%3C/a%3E"));
                        </script>
                      </p>
                      
                  </div>
                </div>
              </div>    
          

<!-- /panel "novidades"-->


      </div>
      </div>
         <div id="footer">
        <div class="container">
            <p>&copy; Copyright <a href="empresa.html">Techsoft </a>Sistema de Gerenciamento Comerciais</p>
            <p><a href="http://techsoft.net.br/">Home | </a><a href="empresa.html">Empresa | </a><a href="contato.html"> Contato</a>
            <B class="endereco">Av. Pedro Taques, 399, Lj 01 - Zona Sete - Maringá - PR - Fone/Fax:(44) 3024-9963</B></p>
        </div>
    </div>

<!--/ fechamento panel principal-->
      </div>
      </div>
<!--/ fechamento panel principal-->


    </div>
  </body>
</html>


























  <?php
  function mask($val, $mask)
  {
   $maskared = '';
   $k = 0;
   for($i = 0; $i<=strlen($mask)-1; $i++)
   {
   if($mask[$i] == '#')
   {
   if(isset($val[$k]))
   $maskared .= $val[$k++];
   }
   else
   {
   if(isset($mask[$i]))
   $maskared .= $mask[$i];
   }
   }
   return $maskared;
  }
  ?>

  <?php
  $cnpj = "11222333000199";
  $cpf = "00100200300";
  $cep = "08665110";
  $data = "10102010";
  echo mask($cnpj,'##.###.###/####-##');
  echo mask($cpf,'###.###.###-##');
  echo mask($cep,'#####-###');
  echo mask($data,'##/##/####');
  ?>