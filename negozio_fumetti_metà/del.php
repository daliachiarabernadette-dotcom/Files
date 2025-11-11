<html>
  <head>
    <title>Negozio di Fumetti</title>
  </head>
  <body>
<center>
<?php require("header.php"); ?>
</center>
  <?php
	
	$query = "SELECT nome FROM Prodotto ORDER BY nome";
	$result = $mysqli->query($query);
	if ($result->num_rows != 0) 
         {
  ?>
   <font size="15">
   <center>
   <form action="delete.php" method="GET"><br>
   PRODOTTO DA ELIMINARE<br><br><br>
   
   <select name="nome">
  <?php
	while ($row = $result->fetch_array())
	
	echo "<option value=\"$row[nome]\">$row[nome]</option>";
  ?>
  </select><br><br>
  <input type="submit" value="Elimina">
 </form>
 </center>
</font>
  <?php
	}
	else
{
        echo"<center>";

	echo "NESSUN PRODOTTO E' PRESENTE NEL DATABASE";
	echo"</center>";
	$mysqli->close();
}
  ?>
  </body>
</html>