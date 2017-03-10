<?
	require("conecta.php");
	
	//Busca os dados.
	$id = $_POST["txtID"];

	//Verifica se tem registro na base de dados.
	$buscaRegistro = mysql_query("SELECT tran_ini_pedal FROM corrida WHERE id = $id;");
	$exibeRegistro = mysql_fetch_array($buscaRegistro);
	
	//Verifica se existe um registro.
	if($exibeRegistro[tran_ini_pedal] == ""){

		//Insere os valores no banco de dados.		
		$sqlTransicao = mysql_query("UPDATE corrida SET tran_ini_pedal = NOW() WHERE id = $id;");
		$sqlTempo = mysql_query("UPDATE corrida SET tempo_pedal = TIMEDIFF(tran_ini_pedal, tran_fim_co) WHERE id = $id;");
	
		//Condição para confirmação do cadastro.
		if($sqlTransicao and $sqlTempo){
	 		 echo("<body bgcolor='#00FF00'>");
	 	}else{
	  		 echo("<body bgcolor='#FF0000'>");
		}

	}else{
		echo("<body bgcolor='#FF0000'>");
	}
		 		
	//Comando responsavel por realizar um "Refresh" na página.
	echo("<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../terminais/terminal2.php'>");
?>