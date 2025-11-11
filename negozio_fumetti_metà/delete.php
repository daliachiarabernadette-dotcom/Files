<html>
  <head>
    <title>Negozio di Fumetti</title>
  </head>
  <body>
<center>
<?php require("header.php"); ?>
</center>
  <?php
              $nome = $_GET["nome"];	
	$query = "DELETE FROM Prodotto WHERE nome = '$nome'";
	$result = $mysqli->query($query);
	$mysqli->close();
        echo"<br>";
        echo"<br>";
        echo"<br>";
        echo"<center>";
	echo "<h1>IL PRODOTTO $nome E' STATO ELIMINATO DAL DATABASE</h1>";
        echo"</center>";
?>
<br><br>
<center>
   <a href="http://localhost/Tpsit/Negozio_Fumetti/negozio_fumetti_metà/home.php">
    VISUALIZZA ELENCO PRODOTTO
   </a>
</center>
<pre>














</pre>
<hr>
<?php include('footer.php'); ?>
  </body>
</html>