<?
	include '../admin/restrito.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Menu</title>
    <link rel="stylesheet" type="text/css" href="../estilos/design.css"/>
</head>
<body>
	<div align="center">
        <h1 class="txtTitulo">Menu</h1>
    	<div class="divCentralC" align="center" style="border-radius:20px;">
        	<div id="divMenu" align="center">
                <div class="divLink"><a href="../terminais/terminal1.php">Terminal 1</a></div>
                <div class="divLink"><a href="../terminais/terminal2.php">Terminal 2</a></div>
                <div class="divLink"><a href="../terminais/terminal3.php">Terminal 3</a></div>
                <div class="divLink"><a href="../terminais/largada.php">Controle de Largada</a></div>
                <div class="divLink"><a href="../publico/1.php">DCB Duathlon</a></div>
            </div>
    	</div>
    </div>
   <div align="center">
   	<form action="../admin/sair.php">
		<input class="btnForm" type="submit" name="logout" value="Sair" />
	</form>
   </div>
</body>
</html>