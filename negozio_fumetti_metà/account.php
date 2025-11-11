<html>
<head><title>Negozio di Fumetti</title></head>
<center>
<?php require("header.php"); ?>
</center>
<div class="row center">
	<?php
		
			echo '<h1>Pagina account</h1>';                   
                        echo '<a href="cliente.php"><button class="little">Visualizza dati</button></a> ';
                        echo '<a href="editcliente.php"><button class="little">Modifica dati</button></a> ';
			echo '<a href="logout.php"><button class="little">Effettua il logout</button></a>';
		
	?>
</div>
<?php require("footer.php"); ?>
</body>
</html>