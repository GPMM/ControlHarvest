<?php

Class Dbconn {
	protected $host = "albali.eic.cefet-rj.br";
	protected $user = "controlharvest";
	protected $port = 5432;
	protected $pswd = "controlharvest5090!";
	protected $dbname = "controlharvest";
	protected $con = null;

	function __construct(){} //método construtor

	#método que inicia conexao
	function open(){
		$this->con = pg_connect("host=$this->host port=$this->port user=$this->user
		password=$this->pswd dbname=$this->dbname");
		return $this->con;
	}

	#método que encerra a conexao
	function close(){
		$this->con = pg_close($this->con);
	}

	#método verifica status da conexao
	function statusCon(){
		$stat = pg_connection_status($this->con);
		if ($stat === 0) {
			echo 'Conectado ao banco<br/>';
		} else {
			echo 'Não conectado ao banco<br/>';
		}
	}
}
?>