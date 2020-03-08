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

$sessao = $jsonarray -> sessao;
$tipo = $jsonarray -> tipo;
$agente = $jsonarray -> agente;
$tempo_de_jogo = $jsonarray -> tempo_de_jogo;
$quantidade = $jsonarray -> quantidade;
$tempo_meta = $jsonarray -> tempo_meta;
$valor_multa = $jsonarray -> valor_multa;
//echo "nome = ".$nome."/ pontuacao = ".$pontuacao."/ dia = ".$dia."/ mes = ".$mes."/ ano = ".$ano."/ hora = ".$hora."/ minuto = ".$minuto;


$sql = "insert into evento(sessao, tipo, agente, tempo_de_jogo, quantidade, tempo_meta, valor_multa) values ('$sessao','$tipo','$agente','$tempo_de_jogo','$quantidade','$tempo_meta','$valor_multa')";
$result = pg_query($sql) or die('Query failed: ' . pg_last_error());

$conn->close();
//$conn->statusCon();
?>
