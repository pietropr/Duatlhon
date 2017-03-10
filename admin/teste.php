<?
	require "../conecta/conecta.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
</head>
<body>
<?
	for ($i=1;$i<=200;$i++){
		$resultado[$i] .= mysql_query("INSERT INTO corrida VALUES ($i, now(), null, null, null, null, null, null, null, null);");
	}
?>


</body>
</html>