<div class="panel panel-primary span10" id="divPrincipal">
        <div class="panel-heading">Teste Intranet</div>

<div class="container-fluid" id="divBotao">
  <div class="row-fluid">
    <div class="span2">
      
        <div id="divBotoes">
              <a href="consultaClient.php?page=1"> <button  type="button" class="btn btn-info" data-toggle="modal" data-target=".bs-example-modal-sm" width="500px">
            <span class="glyphicon glyphicon-user" style="font-size:48px" text-align="center";></span><br>CONSULTA CLIENTES</button></a>
            </div>
              <br>
            <div id="divBotoes">
            <a href="consultaprod.php?page=1"> <button id="btnMenuIntra" type="button" class="btn btn-info" data-toggle="modal" data-target=".bs-example-modal-sm" width="500px">
            <span class="glyphicon glyphicon-barcode" style="font-size:48px" text-align="center";></span><br>CONSULTA PRODUTOS</button></a>
          </div>

    </div>    
    </div>    
    </div>    












                    <div>
                    <?php include 'conexao.php' ?>
<?php
$page = $_GET["page"];
if(isset($page)) {
$page = $page;
} else {
$page = 1;
}
    //verifica a página atual caso seja informada na URL, senão atribui como 1ª página
      //  $pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;
 
    //seleciona todos os itens da tabela
        $consulta = "SELECT * FROM clientes";
        $clientes = mysql_query($consulta);
   
    //conta o total de itens
        $total = mysql_num_rows($clientes);
   
    //seta a quantidade de itens por página, neste caso, 2 itens
        $registros = 10;
        $max_links = 3;
    // Exibe o primeiro link "primeira página", que não entra na contagem acima(3)
   
    //calcula o número de páginas arredondando o resultado para cima
        $numPaginas = ceil($total/$registros);
   
    //variavel para calcular o início da visualização com base na página atual
        $inicio = ($registros*$page)-$registros;
 
    //seleciona os itens por página
        
        $consulta = "SELECT * FROM clientes order by CODIGO LIMIT $inicio , $registros";
        $clientes = mysql_query($consulta);
        $total = mysql_num_rows($clientes);
 
    echo '<table class="table table-hover">';  // opening table tag
echo '<thead>
      <tr>
        <th class="info">Codigo</th>
        <th class="info">CPF/CNPJ</th>
        <th class="info">Razao</th>
        <th class="info">Nome</th>
        <th class="info">Endereço</th>
        <th class="info">Numero</th>
    </tr>
    </thead>';
while ($produto = mysql_fetch_array($clientes)) {
echo '<tr>

      <td>'.$produto['CODIGO'].'</td>
      <td>'.$produto['CPFCNPJ'].'</td>
      <td>'.$produto['RAZAO'].'</td>
      <td>'.$produto['NOME'].'</td>
      <td>'.$produto['ENDERECO'].'</td>
      <td>'.$produto['NUMERO'].'</td>';
echo '</tr>'; 
}
echo '</table>';
;
         
echo '
<center>
<nav>
  <ul class="pagination">
    <li>';
      echo "<a href='consultaClient.php?page=1'>primeira pagina</a> ";
      echo '</a>
    </li>';


// Cria um for() para exibir os 3 links antes da página atual
for($i = $page-$max_links; $i <= $page-1; $i++) {
// Se o número da página for menor ou igual a zero, não faz nada
// (afinal, não existe página 0, -1, -2..)
if($i <=0) {
//faz nada
// Se estiver tudo OK, cria o link para outra página
} else {
echo "<li><a href='consultaClient.php?page=$i'>$i</a></li>";
}
}
// Exibe a página atual, sem link, apenas o número
echo "<li class='disabled'><a href='consultaClient.php?page=$i'>$i</a></li>";
// Cria outro for(), desta vez para exibir 3 links após a página atual
for($i = $page+1; $i <= $page+$max_links; $i++) {
// Verifica se a página atual é maior do que a última página. Se for, não faz nada.
if($i > $numPaginas)
{

}
// Se tiver tudo Ok gera os links.
else
{
echo "<li><a href='consultaClient.php?page=$i'>$i</a></li>";
}
}
// Exibe o link "última página"
    echo '<li>';
    echo "<a href='consultaClient.php?page=$numPaginas'>ultima pagina</a> ";
    echo '</li>
  </ul>
</nav>';
?>

                  </div>    