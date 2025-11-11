<html>
<head><title>Negozio di Fumetti</title></head>
<body>
<pre>

</pre>
<center>
<?php require("header.php"); ?>
</center>
<div class="row center">

	<?php
            if(!isset($_SESSION["email"]))
		{
		
			echo
			'
			<form action="postregistrazione.php" method="POST">
			<h2>Effettua la registrazione compilando i seguenti campi (* obbligatorio)</h2>
			<label class="right">Email*:</label><input type="email" maxlength="64" name="email"><br>
			<label class="right">Password*:</label><input type="password" pattern=".{8,}" title="La password deve contenere almeno 8 caratteri" name="password"><br>
			<label class="right">Ripeti password*:</label><input type="password" pattern=".{8,}" title="La password deve contenere almeno 8 caratteri" name="ripetipassword"><br>
			<label class="right">Nome*:</label><input type="text" maxlength="32" name="nome"><br>
			<label class="right">Cognome*:</label><input type="text" maxlength="32" name="cognome"><br>
			<label class="right">Comune*:</label><input type="text" maxlength="32" name="localita"><br>
			<label class="right">Provincia*:</label><input type="text" pattern="[A-Za-z]{2}" title="La provincia è formata da 2 caratteri" maxlength="2" name="provincia"><br>
			<label class="right">Indirizzo*:</label><input type="text" maxlength="64" name="indirizzo"><br>
			<label class="right">CAP*:</label><input type="text" pattern="[0-9]{5}" title="Il CAP è formato da 5 numeri" name="cap"><br>
			<label class="right">Telefono:</label><input type="text" maxlength="10" name="telefono"><br>
			<label class="right">Codice Fiscale:</label><input type="text" pattern=".{16}" title="Il codice fiscale è formato da 16 caratteri" maxlength="16" name="codfiscale"><br>
			<button type="reset" class="form">Cancella</button><button type="submit" class="form">Registrati</button>
			</form>';
		}
	?>
<pre>


</pre>
<hr>
</div>
<?php include('footer.php'); ?>
</body>
</html>