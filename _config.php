<?php
//header("Content-type: text/html; charset=utf-8");

	$servidor = 'localhost';
	$usuario = 'root';
	$senha = '';
	$banco = 'mundoc';

	$con = new mysqli($servidor, $usuario, $senha, $banco);


	if(mysqli_connect_errno()){
		exit('Erro ao conectar-se ao banco de dados. '.mysqli_connect_error());
	}


$con->query("SET NAMES 'utf8'");
$con->query('SET character_set_connection=utf8');
$con->query('SET character_set_client=utf8');
$con->query('SET character_set_results=utf8');

$con->query('SET GLOBAL lc_time_names=pt_BR');
$con->query('SET lc_time_names = pt_BR');
