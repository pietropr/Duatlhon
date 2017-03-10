<?
	require("conecta.php");
	
	//Recebe os dados direto do formulário.
	$inicioID = $_POST["txtInicioID"];
	$fimID = $_POST["txtFimID"];
	
	if($inicioID < $fimID){
		//Instrução responsavel por executar o procedimento para inserçãos dos IDs.
		$iniciaLargada = mysql_query("CALL CONTROLALARGADA('$inicioID', '$fimID');");
		
		//Comando responsavel por realizar um "Refresh" na página.
		echo("<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../terminais/menu.php'>");
	}else{
		echo("<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../terminais/largada.php'>");
	}
?>