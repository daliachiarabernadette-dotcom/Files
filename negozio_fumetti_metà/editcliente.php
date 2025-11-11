<center>
<?php require("header.php"); ?>
</center>
<div class="row center">
	<?php
		if(!isset($_SESSION["email"]))
		{
			echo "Errore! Accedi per modificare i tuoi dati! Sarai reindirizzato sulla pagina d'accesso.";
			header('Refresh: 3; URL=login.php');
		}
		else
		{
			echo "<h1>Modifica dati cliente - ".$_SESSION["email"]."</h1>";
			echo
			'<form action="posteditcliente.php" method="POST">
			<h2>Modifica i campi che desideri (L\'inserimento della password attualmente in utilizzo (*) è obbligatoria)</h2>
			<label class="right">Password*:</label><input type="password" pattern=".{8,}" title="La password deve contenere almeno 8 caratteri" name="pass"><br>
			<label class="right">Nuova Password:</label><input type="password" pattern=".{8,}" title="La password deve contenere almeno 8 caratteri" name="newpass"><br>
			<label class="right">Nome:</label><input type="text" maxlength="32" name="nome"><br>
			<label class="right">Cognome:</label><input type="text" maxlength="32" name="cognome"><br>
			<label class="right">Comune:</label><input type="text" maxlength="32" name="localita"><br>
			<label class="right">Provincia:</label><input type="text" pattern="[A-Za-z]{2}" title="La provincia è formata da 2 caratteri" maxlength="2" name="provincia"><br>
			<label class="right">Indirizzo:</label><input type="text" maxlength="64" name="indirizzo"><br>
			<label class="right">CAP:</label><input type="text" pattern="[0-9]{5}" title="Il CAP è formato da 5 numeri" name="cap"><br>
			<label class="right">Telefono:</label><input type="text" maxlength="10" name="telefono"><br>
			<label class="right">Codice Fiscale:</label><input type="text" pattern=".{16}" title="Il codice fiscale è formato da 16 caratteri" maxlength="16" name="codfiscale"><br>
			<button type="reset" class="form">Cancella</button><button type="submit" class="form">Aggiorna</button>
			</form>';
		}
	?>
</div>	
<?php require("footer.php"); ?>