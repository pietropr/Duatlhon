<?
	$host = "localhost";
	$banco = "duathlon2";
	$usuario = "root";
	$senha = "root";
	$conexao = mysql_connect($host, $usuario, $senha) or die(mysql_error("Não foi possível conectar-se."));
	$seleciona = mysql_select_db($banco, $conexao) or die ("Não foi possível selecionar o banco de dados.");
?>