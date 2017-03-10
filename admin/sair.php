	<link rel="stylesheet" type="text/css" href="../estilos/design.css" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	ob_start();
	session_start();
	
	unset($_SESSION['usarioSession']);
	unset($_SESSION['senhaSession']);
	
	echo'<div align="center">
			 <div class="divCentralMsg" align="center">
				<label>Você saiu do sistema.<label> 
				<br />
				<a href="../index.html">Clique aqui para realizar a autenticação</a>.
				<br />
				<hr />
				<label> A página será atualizada automaticamente em 5 segundos.</ label>
			 </ div>
		 </ div>';
		 
	echo "<meta HTTP-EQUIV='refresh' CONTENT='5;URL=../index.html'>";
?>