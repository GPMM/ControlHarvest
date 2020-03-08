<?php
#incluindo a classe conexao (supondo estar no mesmo diretorio)
include("dbconn.class.php");

#instanciando o objeto
$minhaConexao = new Dbconn();

#verificando a conexao antes de abrir conexao;
$minhaConexao->statusCon();

#chamada ao metodo open que abra a conexao
$minhaConexao->open();

#verificando o status da conexao
$minhaConexao->statusCon();

#encerrando a conexao
$minhaConexao->close();

#verificando a conexao apos close();
$minhaConexao->statusCon();
?>