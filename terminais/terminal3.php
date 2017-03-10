<?
	include '../admin/restrito.php';
	require "../admin/conecta.php";
?>
<!DOCTYPE html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Terminal 3</title>
        <link rel="stylesheet" type="text/css" href="../estilos/design.css"/>
    </head>
<body>
<h1 align="center">Terminal 3</h1>
<div class="divCentralF">
		<table width="98%" cellpadding="5" cellspacing="3" id="tabela">
        <tr align="center">
        	<td width="34" height="28"><b>ID</b></td>
            <td width="164"><b>Inicio Transição Corrida</b></td>
            <td width="147"> <b>Fim Transição Corrida</b></td>
            <td width="155" align="center"><b>Transição Corrida</b></td>
            <td width="156" align="center"><b>Inicio Transição Pedal</b></td>   
            <td width="140"><b>Fim Transição Pedal</b></td>   
            <td width="164" align="center"><b>Tempo na  area de Transição</b></td>
        </tr>
<?php 
	$corrida = mysql_query("SELECT * FROM corrida ORDER BY tran_ini_co DESC");  
	while($escreve=mysql_fetch_array($corrida)){
	
?>
	<tr id="tabela" align="center" style="font-weight:bold">
    <?php
  		if( $escreve['tempo_corrida'] || NULL){ echo "<td><b>$escreve[id]</b></td>";
			if ($escreve['id'] >= 100 && $escreve['id'] < 300 ) {
				
				echo "<td bgcolor='#3E4095'><b style='color: #ffffff'>$escreve[tempo_corrida]</b></td>";
				echo "<td bgcolor='#3E4095'><center><b style='color: #ffffff'>$escreve[tempo_tran_co]</b></center></td>";
				echo "<td bgcolor='#3E4095'><center><b style='color: #ffffff'>$escreve[tempo_pedal]</b></center></td>";
				echo "<td bgcolor='#3E4095' align='center'><b style='color: #ffffff'>$escreve[tempo_tran_pedal]</td>";
				echo "<td bgcolor='#3E4095' align='center'><b style='color: #ffffff'>$escreve[tran_fim_pedal]</td>";
                echo "<td bgcolor='#3E4095' align='center'><b style='color: #ffffff'>$escreve[tempo_tran_pedal]</td>";
			}
			
			if ($escreve['id'] >=300 && $escreve['id'] < 500 ) {
				
				echo "<td bgcolor='#F27FA8'><b>$escreve[tempo_corrida]</b></td>";
				echo "<td bgcolor='#F27FA8'><center><b>$escreve[tempo_tran_co]</b></center></td>";
				echo "<td bgcolor='#F27FA8'><center><b>$escreve[tempo_pedal]</b></center></td>";
				echo "<td bgcolor='#F27FA8' align='center'><b>$escreve[tempo_tran_pedal]</td>";
				echo "<td bgcolor='#F27FA8' align='center'><b>$escreve[tran_fim_pedal]</td>";
                echo "<td bgcolor='#F27FA8' align='center'><b>$escreve[tempo_tran_pedal]</td>";
			}
			
			if ($escreve['id'] >= 500 ) {
				
				echo "<td bgcolor='#cccccc'><b>$escreve[tempo_corrida]</b></td>";
				echo "<td bgcolor='#cccccc'><center><b>$escreve[tempo_tran_co]</b></center></td>";
				echo "<td bgcolor='#cccccc'><center><b>$escreve[tempo_pedal]</b></center></td>";
				echo "<td bgcolor='#cccccc' align='center'><b>$escreve[tempo_tran_pedal]</td>";
				echo "<td bgcolor='#cccccc' align='center'><b>$escreve[tran_fim_pedal]</td>";
                echo "<td bgcolor='#cccccc' align='center'><b>$escreve[tempo_tran_pedal]</td>";
			}
		}
				

  ?>
</td>
</tr>
<?
	}
	echo "<meta HTTP-EQUIV='refresh' CONTENT='3'>";
?>		
 

</table>
</div>

<div align="center"><form action="../admin/gerarExcel.php">
<input class="btnForm" type="submit" value="Gerar Excel" />
</form>
 <a href="menu.php">Voltar ao menu &#8634;</a>
</div>
</body>
</html>
