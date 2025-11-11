<center>
<?php require("header.php"); ?>
</center>
<?php
echo'<br>';
echo'<br>';
echo'<br>';
echo'<br>';
if(isset($_GET["ID"] )) 
{
	$sql="SELECT ID, nome, editore, edizione, volume, scrittore, prezzo, Descrizione, smallimg FROM Prodotto WHERE ID=".$_GET["ID"];
	$result=$mysqli->query($sql);
	if ($result !== false && $result->num_rows > 0)
	{
		echo '<div class="row">';
		while($row=$result->fetch_assoc())
		{
			echo '<div class="col-4 left"><img src="'.$row["smallimg"].'" class="small"></div>';
			echo '<div class="col-8 center">';
			echo '<h1 class="price center">'.$row["prezzo"].' Euro</h1>';
			echo '<a href="index.php?Prodotto='.$_GET["ID"].'"><button class="add">Aggiungi al Carrello</button></a>';
			echo '<h1>Scheda tecnica</h1>';
			echo '<table class="center" style="width:80%">';
			echo '<tr>
					<td class="scheda"><b>Nome</b></td>
					<td>'.$row["nome"].'</td>
				</tr>';
			echo '<tr>
					<td><b>Editore</b></td>
					<td>'.$row["editore"].'</td>
				</tr>';
			echo '<tr>
					<td><b>Edizione</b></td>
					<td>'.$row["edizione"].'</td>
				</tr>';
			echo '<tr>
					<td><b>Volume</b></td>
					<td>'.$row["volume"].'</td>
				</tr>';
			echo '<tr>
					<td><b>Scrittore</b></td>
					<td>'.$row["scrittore"].'</td>
				</tr>';
			echo '<tr>
					<td><b>Prezzo</b></td>
					<td>'.$row["prezzo"].'</td>
				</tr>';
			echo '<tr>
					<td><b>Descrizione</b></td>
					<td>'.$row["Descrizione"].'</td>
				</tr>';
							
			echo '</table>';
			echo '</div>';
			echo '</div>';
			
		}
	}}
	else
	{
		echo '<p class="center">Errore! Prodotto non trovato! Sarai reindirizzato sulla homepage.</p>';
		header('Refresh: 3; URL=home.php');
	}
?>
<pre>



</pre>
<hr>
<?php require("footer.php"); ?>
