<?
	require "../admin/conecta.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Quarta pagina</title>
        <link rel="stylesheet" type="text/css" href="../estilos/design.css"/>
    </head>
<body>
  <table width="100%" border="0" cellpadding="0" cellspacing="0" style="margin-bottom: -40px;">
    <tr>
      <td width="400"align="left"><img src="../imagens/rsgt.png" width="155" height="125"></td>
      			<td width="376" align="center"><p><img src="../imagens/logo fatec.png" alt="" width="155" height="105"></td>
      			<td width="376" align="right"><img src="../imagens/esqueda.png" width="320" height="115"></td>
    </tr>
  </table>
<!-- Logo Corrida -->

<div class="divCentralD">
		<table id="tabela" width="90%"cellpadding="5" cellspacing="3">
        <tr>
        	<td width="33" height="28"><b>ID</b></td>
            <td width="65"><b>Corrida</b></td>
            <td width="159" align="center"><b>Transição Corrida</b></td>
            <td width="71" align="center"><b>Pedal</b></td>      
            <td width="109" align="right"><b>Transição Pedal</b></td>
        </tr>
<?php 
	$corrida = mysql_query("SELECT * FROM corrida ORDER BY tran_ini_co DESC LIMIT 15 OFFSET 90");  
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
<div class="dir">
		<table id="tabela" width="90%"cellpadding="5" cellspacing="3">
        <tr>
        	<td width="33" height="28"><b>ID</b></td>
            <td width="65"><b>Corrida</b></td>
            <td width="159" align="center"><b>Transição Corrida</b></td>
            <td width="71" align="center"><b>Pedal</b></td>      
            <td width="109" align="right"><b>Transição Pedal</b></td>
        </tr>
<?php 
	$corrida2 = mysql_query("SELECT * FROM corrida ORDER BY tran_ini_co DESC LIMIT 15 OFFSET 105");  
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
		echo "<meta HTTP-EQUIV='refresh' CONTENT='3;URL=5.php'>";
	}else{
		echo "<meta HTTP-EQUIV='refresh' CONTENT='3;URL=1.php'>";
	}
?>
</table>
</div>


</body>
</html>
