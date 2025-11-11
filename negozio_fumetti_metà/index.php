 
<link rel="stylesheet" href="css/styles.css">
<?php
echo'<br>';
echo'<br>';
echo'<br>';
echo'<center>';
?>
<div class="container">
			<div class="row">
				<div class="center title"><a href="index.php" class="title">CARRELLO</a></div>
</div>
</div>

<?php

echo'<br>';

echo'<center>';
require 'header.php';
echo'</center>';


		if(!isset($_SESSION["email"]))
		{
			echo "Errore! Accedi per poter effettuare i tuoi acquisti! Sarai reindirizzato sulla pagina d'accesso.";
			header('Refresh: 3; URL=login.php');
		}
		else
		{

$result = mysqli_query($mysqli, 'select * from prodotto');
?>
<table  width="90%" height="40%" border="3" align="center">
<tr>
<th><center>ID</center></th>
<th><center>NOME</center></th>
<th><center>EDITORE</center></th>
<th><center>EDIZIONE</center></th>
<th><center>VOLUME</center></th>
<th><center>SCRITTORE</center></th>
<th><center>PREZZO</center></th>
<th><center>DESCRIZIONE</center></th>
<th><center>ACQUISTA</center></th>
</tr>
<?php 
while($prodotto = mysqli_fetch_object($result)) 
{ 
?>
<tr>
<td><center><?php echo $prodotto->id; ?></center></td>
<td><center><?php echo $prodotto->nome; ?></center></td>
<td><center><?php echo $prodotto->editore; ?></center></td>
<td><center><?php echo $prodotto->edizione; ?></center></td>
<td><center><?php echo $prodotto->volume; ?></center></td>
<td><center><?php echo $prodotto->scrittore; ?></center></td>
<td><center><?php echo $prodotto->prezzo; ?></center></td>
<td><center><?php echo $prodotto->Descrizione; ?></center></td>
<td><center><a href="cart.php?id=<?php echo $prodotto->id; ?>">ACQUISTA ADESSO</a></center></td>
</tr>
<?php 
} }

?>
</table
<pre>






</pre>
<hr>
<center>
<?php require 'footer.php';  ?>
</center>