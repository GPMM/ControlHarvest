<?php
header("Access-Control-Allow-Origin: *");
#incluindo a classe conexao (supondo estar no mesmo diretorio)
include("dbconn.class.php");

#instanciando o objeto
$conn = new Dbconn();
#chamada ao metodo open que abra a conexao
$conn->open();
//$conn->statusCon();

$sql = "select nome, pontuacao from jogador order by pontuacao desc";

$result = pg_query($sql) or die('Query failed: ' . pg_last_error());
$string = '';

for ($i = 0; $i <= 4; $i++) {
	$arr = pg_fetch_array($result, $i, PGSQL_ASSOC);
	$jogador = $arr["nome"] ."&". $arr["pontuacao"]."&";
	//echo $jogador."<br/>";
    $string = $string.$jogador;
}

echo $string;

$conn->close();
//$conn->statusCon();
?>
