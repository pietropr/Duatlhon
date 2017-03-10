<?
	require("conecta.php");
	
	//Busca os dados.
	$id = $_POST["txtID"];
	
	//Verifica se tem registro na base de dados.
	$buscaRegistro = mysql_query("SELECT tran_ini_co, tempo_tran_co FROM corrida WHERE id = $id;");
	$exibeRegistro = mysql_fetch_array($buscaRegistro);
	
	//Verifica se existe um registro.
	if($exibeRegistro[tran_ini_co] != "" && $exibeRegistro[tempo_tran_co] == ""){
		
		$sqlTransicao = mysql_query("UPDATE corrida SET tran_fim_co = NOW() WHERE id = $id;");
		$sqlTempo = mysql_query("UPDATE corrida SET tempo_tran_co = TIMEDIFF(tran_fim_co, tran_ini_co) WHERE id = $id;");
		
		echo "<body bgcolor='#00FF00'>";
	}else{
		echo "<body bgcolor='#FF0000'>";	
	}
	
	//Comando responsavel por realizar um "Refresh" na página.
	echo("<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../terminais/terminal2.php'>");
?>