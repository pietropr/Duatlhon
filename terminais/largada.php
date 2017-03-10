<?
	include('../admin/restrito.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Controle Largada</title>
	<link rel="stylesheet" type="text/css" href="../estilos/design.css" />
</head>
<body>
	<div align="center">
    	<h1 class="txtTitulo">Controle de Largada</h1>
    	<div class="divCentralG" align="center">
            <form id="formLargada" action="../admin/largada.php" method="post">
            	<p>
                	Insíra o intervalo de identificação dos competidores
                	"Números de Peito"
                </p>
                <hr />
                <p>Primeiro:</p>
            	<input class="txtLargada" type="text" name="txtInicioID" autocomplete="off" />
                <p>Último:</p>
                <input class="txtLargada" type="text" name="txtFimID" autocomplete="off" />
                <div id="btnLargada">
                	<input class="btnForm" type="submit" name="largada" value="Processar" />
            	</div>
            </form>
    	</div>
        <a href="menu.php">Voltar ao menu &#8634;</a>
    </div>
</body>
</html>