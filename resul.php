<head><title>Resultados</title></head><center>

<?php 
   mysql_connect("127.0.0.1", "root") or die(mysql_error());
   mysql_select_db("dato") or die(mysql_error());
   $result=mysql_query("select * from  votaciones"); 
?>

<TABLE BORDER=0 CELLSPACING=1 CELLPADDING=1> 


<?php 
    

   while($row = mysql_fetch_array($result)) { 
      printf("<tr><td><BR>&nbsp;<font color='green' size='4'><center><b>El Candidato'%s' Ha Conseguido: </b> <font color='darkblue'>'%s'</font> Votos</font></center></font></td></TR>",$row["nombre"],$row["clicks"]);
}    
   mysql_free_result($result); 

?> 


</table>

</center>