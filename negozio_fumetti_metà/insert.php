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
	$editore = $_GET["editore"];
	$edizione = $_GET["edizione"];
	$volume = $_GET["volume"];
	$scrittore = $_GET["scrittore"];
  $prezzo = $_GET["prezzo"];
  $Descrizione = $_GET["Descrizione"];
  $smallimg = $_GET["immagine"];
    
	$nome = $mysqli->real_escape_string($_GET["nome"]);    
	$query = "SELECT * FROM Prodotto WHERE nome = '$nome'";
	$result = $mysqli->query($query);
	if ($result->num_rows > 0)
              {
                echo"<br>";
                echo"<br>";
                echo"<br>";
                echo"<center>";
		echo "<h1>Il PRODOTTO $nome E' GIA' PRESENTE NEL DATABASE";
	        echo"</center>";
              }
             else 
              {
		$query = "INSERT INTO Prodotto(nome,editore,edizione,volume,scrittore,prezzo,Descrizione,smalling) VALUES ('$nome','$editore','$edizione','$volume','$scrittore','$prezzo','$Descrizione','$smallimg')";
		$mysqli->query($query);
                echo"<center>";
		echo "IL PRODOTTO  $nome E' STATO AGGIUNTO AL DATABASE";
	        echo"</center>";
             }
  ?>
   <center>
   <br><br>
   <a href="http://localhost/Tpsit/Negozio_Fumetti/negozio_fumetti_metà/home.php">
    VISUALIZZA ELENCO PRODOTTI
   </a>
  </center>
<?php include('footer.php');  ?>
  </body>
</html>
