	<link rel="stylesheet" type="text/css" href="../estilos/design.css" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	ob_start();
	session_start();
	
	if(!isset($_SESSION['usuarioSession']) and !isset($_SESSION['senhaSession'])):
		echo'<div align="center">
			 	<div class="divCentralMsg" align="center">
					<label>Você não tem permissão para acessar a página.<label> 
					<br />
					<a href="../index.html">Clique aqui para realizar a autenticação</a>.
			    </ div>
			 </ div>';
		die;
	endif;
?>