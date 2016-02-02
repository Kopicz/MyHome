<!DOCTYPE html>
<html>
<head>
	<title>lala</title>
</head>
<body>
<form name="SAPORRA" method="GET" action="teste2.php?pag=1">
	<input name="busca" id="busca" type="text" siza:35>
	<input type="submit" value="envia" >
</form>
<?php include'conexao.php' ?>
<?php
/* Desenvolvido por Evandro Miguel Fortunato em: 11/06/2007
Fonte: www.revistaphp.com.br

Corrigido por Rodrigo em: 18/04/2008 - www.revistaphp.com.br

Editado por Flávio em: 25/07/2012 - www.helcai.com
Adapitando para funcionar num sistema de busca.
*/

$busca = $_GET["busca"];


if (!isset($_GET["pagina"])) {
$pagina = 1;
}
else {
$pagina = $_GET["pagina"];

}

$max=10;

$inicio = $pagina - 1;
$inicio = $max * $inicio;

$sql=("select * from CLIENTES where RAZAO like '%$busca%'");
$query=mysql_query($sql);
$total=mysql_num_rows($query);

if ($total == 0)
echo "Nenhum registro encontrado!";
else

{
echo"Quantidade de registros encontrados: ".$total.'<br><br>';
$sql2=("select * from CLIENTES where RAZAO like '%$busca%' LIMIT $inicio,$max");
$query2 = mysql_query($sql2);
?>
<style type="text/css">
<!--
body,td,th {
font-family: Verdana, Arial, Helvetica, sans-serif;
font-size: 12px;
}
a:link {
color: #0099FF;
}
a:visited {
color: #0099FF;
}
a:hover {
color: #99CC00;
}
a:active {
color: #0099FF;
}
.texto_paginacao_pgatual {color:#FF0000;}
-->
</style>
<table width="770" border="0" cellspacing="0" cellpadding="0" align="center">
<?php
while ($a = mysql_fetch_array($query2)){
    $id = $a["CODIGO"];
    $mat = $a["RAZAO"];
?>
<tr>
<td scope="col"><?=$id;?></td>
<td scope="col"><?=$mat;?></td>
</tr>
<?php } ?>
</table>
<table width="770" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
<td height="71" scope="col" align="center">
<?php
}
// Calculando pagina anterior
$menos = $pagina - 1;
// Calculando pagina posterior
$mais = $pagina + 1;
$pgs = ceil($total / $max);
if($pgs > 1 )
{
if($menos >0)
echo "<a href=\"?pesquisa=$busca&botao=Pesquisar&pagina=$menos\" class='texto_paginacao'>Anterior</a> ";

if (($pagina-4) < 1 )

$anterior = 1;

else
$anterior = $pagina-4;

if (($pagina+4) > $pgs )
$posterior = $pgs;
else

$posterior = $pagina + 4;

for($i=$anterior;$i <= $posterior; $i++)
if($i != $pagina)
echo " <a href=\"?pesquisa=$busca&botao=Pesquisar&pagina=".($i)."\" class='texto_paginacao'>$i</a>";

else
echo " <strong class='texto_paginacao_pgatual'>".$i."</strong>";

if($mais <= $pgs)
echo " <a href=\"?pesquisa=$busca&botao=Pesquisar&pagina=$mais\" class='texto_paginacao'>Proxima</a>";
}
?>
</td>
</tr>
</table>
</body>
</html>