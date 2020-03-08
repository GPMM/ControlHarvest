<?php
header("Access-Control-Allow-Origin: *");
#incluindo a classe conexao (supondo estar no mesmo diretorio)
include("dbconn.class.php");

#instanciando o objeto
$conn = new Dbconn();
#chamada ao metodo open que abra a conexao
$conn->open();
//$conn->statusCon();

$json = $_GET['json'];
$jsonarray = json_decode($json);

$nome = $jsonarray -> nome;
$pontuacao = $jsonarray -> pontuacao;
$dia = $jsonarray -> dia;
$mes = $jsonarray -> mes;
$ano = $jsonarray -> ano;
$hora = $jsonarray -> hora;
$minuto = $jsonarray -> minuto;
//echo "nome = ".$nome."/ pontuacao = ".$pontuacao."/ dia = ".$dia."/ mes = ".$mes."/ ano = ".$ano."/ hora = ".$hora."/ minuto = ".$minuto;


$sql = "insert into jogador(nome, pontuacao, dia, mes, ano, hora, minuto) values ('$nome','$pontuacao','$dia','$mes','$ano','$hora','$minuto')";
$result = pg_query($sql) or die('Query failed: ' . pg_last_error());

$sql2 = "select * from jogador where nome='$nome' and pontuacao='$pontuacao' and dia='$dia' and mes='$mes' and ano='$ano' and hora='$hora' and minuto='$minuto'";
$result2 = pg_query($sql2) or die('Query failed: ' . pg_last_error());

$arr = pg_fetch_assoc($result2);

echo $arr["id"];

$conn->close();
//$conn->statusCon();
?>
