﻿<?
	require "../admin/conecta.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Página 1</title>
        <link rel="stylesheet" type="text/css" href="../estilos/design.css"/>
    </head>
<body>
  <table width="100%" border="0" cellpadding="0" cellspacing="0" style="margin-bottom: -40px;">
    <tr>
      <td width="400" height="101"align="left"><img src="../imagens/rsgt.png" width="150" height="101"></td>
	  <td width="376" align="center"><p><img src="../imagens/esqueda.png" width="312" height="91"></td>
      			<td width="376" align="right"><img src="../imagens/logo fatec.png" alt="" width="140" height="85"></td>
    </tr>
  </table>
<!-- Logo Corrida -->
<div class="divCentralD">
		<table id="tabela" width="97%"cellpadding="5" cellspacing="3">
        <tr>
        	<td align="center"><b>ID</b></td>
            <td align="center"><b>Corrida</b></td>
            <td align="center"><b>Transição Corrida</b></td>
            <td align="center"><b>Pedal</b></td>      
            <td align="center"><b>Transição Pedal</b></td>
        </tr>
<?php 
	$corrida = mysql_query("SELECT * FROM corrida ORDER BY tran_ini_co DESC LIMIT 15 OFFSET 0");  
	while($escreve=mysql_fetch_array($corrida)){
?>
<tr id="tabela">
				                 
  <?php
  		if( $escreve['tempo_corrida'] || NULL){ echo "<td><b>$escreve[id]</b></td>";
			if ($escreve['id'] >= 100 && $escreve['id'] < 300 ) {
				
				echo "<td bgcolor='#3E4095'><center><b style='color: #ffffff'>$escreve[tempo_corrida]</b></center></td>";
				echo "<td bgcolor='#3E4095'><center><b style='color: #ffffff'>$escreve[tempo_tran_co]</b></center></td>";
				echo "<td bgcolor='#3E4095'><center><b style='color: #ffffff'>$escreve[tempo_pedal]</b></center></td>";
				echo "<td bgcolor='#3E4095' align='center'><b style='color: #ffffff'>$escreve[tempo_tran_pedal]</td>";
				
			}
			
			if ($escreve['id'] >=300 && $escreve['id'] < 500 ) {
				
				echo "<td bgcolor='#F27FA8'><center><b>$escreve[tempo_corrida]</b></center></td>";
				echo "<td bgcolor='#F27FA8'><center><b>$escreve[tempo_tran_co]</b></center></td>";
				echo "<td bgcolor='#F27FA8'><center><b>$escreve[tempo_pedal]</b></center></td>";
				echo "<td bgcolor='#F27FA8' align='center'><b>$escreve[tempo_tran_pedal]</td>";
				
			}
			
			if ($escreve['id'] >= 500 ) {
				
				echo "<td bgcolor='#cccccc'><center><b>$escreve[tempo_corrida]</b></center></td>";
				echo "<td bgcolor='#cccccc'><center><b>$escreve[tempo_tran_co]</b></center></td>";
				echo "<td bgcolor='#cccccc'><center><b>$escreve[tempo_pedal]</b></center></td>";
				echo "<td bgcolor='#cccccc' align='center'><b>$escreve[tempo_tran_pedal]</td>";
				
			}
		}
				

  ?>
  </td>     
  </tr>
            
<?
	}
?>
</table>
</div>
<!--Tabela direita-->
<!--Tabela direita-->
<div class="dir">
		<table id="tabela" width="97%"cellpadding="5" cellspacing="3">
        <tr>
        	<td align="center"><b>ID</b></td>
            <td align="center"><b>Corrida</b></td>
            <td align="center"><b>Transição Corrida</b></td>
            <td align="center"><b>Pedal</b></td>      
            <td align="center"><b>Transição Pedal</b></td>
        </tr>
<?php
	$corrida2 = mysql_query("SELECT * FROM corrida ORDER BY tran_ini_co DESC LIMIT 15 OFFSET 15");  
	$i=0;
	while($escreve2=mysql_fetch_array($corrida2)){
	
?>
<tr id="tabela">			                 
<?php
  		if( $escreve2['tempo_corrida'] || NULL){ echo "<td><b>$escreve2[id]</b></td>";
			if ($escreve2['id'] >= 100 && $escreve2['id'] < 300 ) {
				
				echo "<td bgcolor='#3E4095'><center><b style='color: #ffffff'>$escreve2[tempo_corrida]</b></center></td>";
				echo "<td bgcolor='#3E4095'><center><b style='color: #ffffff'>$escreve2[tempo_tran_co]</b></center></td>";
				echo "<td bgcolor='#3E4095'><center><b style='color: #ffffff'>$escreve2[tempo_pedal]</b></center></td>";
				echo "<td bgcolor='#3E4095' align='center'><b style='color: #ffffff'>$escreve2[tempo_tran_pedal]</b></td>";
			}
			
			if ($escreve2['id'] >=300 && $escreve2['id'] < 500 ) {
				
				echo "<td bgcolor='#F27FA8'><center><b>$escreve2[tempo_corrida]</b></center></td>";
				echo "<td bgcolor='#F27FA8'><center><b>$escreve2[tempo_tran_co]</b></center></td>";
				echo "<td bgcolor='#F27FA8'><center><b>$escreve2[tempo_pedal]</b></center></td>";
				echo "<td bgcolor='#F27FA8' align='center'><b>$escreve2[tempo_tran_pedal]</b></td>";
			}
			
			if ($escreve2['id'] >= 500 ) {
				
				echo "<td bgcolor='#cccccc'><center><b>$escreve2[tempo_corrida]</b></center></td>";
				echo "<td bgcolor='#cccccc'><center><b>$escreve2[tempo_tran_co]</b></center></td>";
				echo "<td bgcolor='#cccccc'><center><b>$escreve2[tempo_pedal]</b></center></td>";
				echo "<td bgcolor='#cccccc' align='center'><b>$escreve2[tempo_tran_pedal]</b></td>";
			}
			$i=$i+1;
		}
  ?>
  </td>     
  </tr>
            
<?
	}
	if($i>=15){
		echo "<meta HTTP-EQUIV='refresh' CONTENT='3;URL=2.php'>";
	}else{
		echo "<meta HTTP-EQUIV='refresh' CONTENT='2'>";
	}
?>
</table>
</div>


</body>
</html>
