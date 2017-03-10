<?
	include("../admin/restrito.php");
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Terminal 2</title>
    <link rel="stylesheet" type="text/css" href="../estilos/design.css"/>
</head>
<body>
<div align="center">
	<h1 class="txtTitulo">Terminal 2</h1>
   	<div class="divCentral" align="center">
      	<h2>Corrida (Saída)</h2>
        <h4>Área de Transição &rarr; Ciclismo</h4>
        <p>ID Corredor:<p>
        <form action="../admin/updatePrimeiraVolta.php" method="post">
        	<input class="txtID" type="text" name="txtID" maxlength="3" autocomplete="off">
        	<div id="btnIniciar">
        		<input class="btnForm" type="submit" name="Finalizar" value="Finalizar"/>
        	</div>
        </form>
	</div>
    <div class="divCentralB" align="center">
      	<h2>Bicicleta (Entrada)</h2>
        <h4>Ciclismo &rarr; Área de Transição</h4>
        <p>ID Corredor:<p>
        <form action="../admin/insertSegundaVolta.php" method="post">
        	<input class="txtID" type="text" name="txtID" maxlength="3" autocomplete="off">
        	<div id="btnFinalizar">
        		<input class="btnForm" type="submit" name="Iniciar" value="Iniciar"/>
        	</div>
        </form>
	</div>
    <a href="menu.php">Voltar ao menu &#8634;</a>
</div> 
</body>
</html>
