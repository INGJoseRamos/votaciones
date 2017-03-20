<?php
	// Recibimos la ID del vinculo desde la URL
	$id = $_REQUEST['id'];
	
	mysql_connect("127.0.0.1", "root") or die(mysql_error());
	mysql_select_db("dato") or die(mysql_error());

	$consulta = "SELECT clicks from votaciones WHERE id='$id'";
	$votos=mysql_query($consulta) or die (mysql_error());
	$votos=$votos+1;

	// Incrementamos en 1 el contador del link con la ID especificada en la url
	$update = "UPDATE votaciones SET clicks='$votos' WHERE id='$id'";
	mysql_query($update) or die (mysql_error());

?>	
