<?php
     $servidor = "albali.eic.cefet-rj.br";
     $porta = 5432;
     $bancoDeDados = "controlharvest";
     $usuario = "controlharvest";
     $senha = "controlharvest5090!";

     $conexao = pg_connect("host=$servidor port=$porta dbname=$bancoDeDados user=$usuario password=$senha");
     if(!$conexao) {
         die("Não foi possível se conectar ao banco de dados.");
     } else {
		 echo "conexão realizada";
	 }
	 pg_close($conexao);
?>