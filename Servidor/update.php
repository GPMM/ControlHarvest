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

$id = $jsonarray -> id;
$pontuacao = $jsonarray -> pontuacao;

$sql = "update jogador set pontuacao='$pontuacao' where id='$id'";
$result = pg_query($sql) or die('Query failed: ' . pg_last_error());

$conn->close();
//$conn->statusCon();
?>
