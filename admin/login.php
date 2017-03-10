<?php
	ob_start();
	session_start();
?>
	<link rel="stylesheet" type="text/css" href="../estilos/design.css" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	if($_POST['entrar']):
		$usuarioLogin = $_POST['usuario'];
		$senhaLogin   = $_POST['senha'];
		
			if(empty($usuarioLogin)):
				echo'<div align="center">
						<div class="divCentralMsg" align="center">
					 		<label>Digite seu nome de usuário.<label> 
							<br />
							<a href="../index.html">Clique aqui para tentar novamente</a>.
					 	</ div>
					 </ div>';
			elseif(empty($senhaLogin)):
				echo'<div align="center">
						<div class="divCentralMsg" align="center">
					 		<label>Digite sua senha.<label> 
							<br />
							<a href="../index.html">Clique aqui para tentar novamente</a>.
					 	</ div>
					 </ div>';
			else:
				include_once 'config.php';
				if($usuarioLogin == $usuario and $senhaLogin == $senha) :
				
					$_SESSION['usarioSession'] = $usuarioLogin;
					$_SESSION['senhaSession'] = $senhaLogin;
					
					header("Location: ../terminais/menu.php");
				else :
					echo'<div align="center">
						<div class="divCentralMsg" align="center">
					 		<label>Dados incorretos. Preencha novamente!<label> 
							<br />
							<a href="../index.html">Clique aqui para tentar novamente</a>.
					 	</ div>
					 </ div>';
				endif;							
			endif;
	endif;
?>