<html>
<head><title>Negozio di Fumetti</title></head>
<body>
<center>
<?php require("header.php"); ?>
</center>
<div class="row center">
	<?php
		$campipost=array("email", "password", "ripetipassword", "nome", "cognome", "localita", "provincia", "indirizzo", "cap");
		foreach($campipost as $campo)
		{
			if (($_POST[$campo])=="")
			{
				echo "Errore. Campi richiesti mancanti! Sarai reindirizzato sulla pagina di registrazione.";
				header('Refresh: 3; URL=registrazione.php');
				die();
			}
		}
		if($_POST["password"]==$_POST["ripetipassword"])
		{
			$pass=password_hash($_POST["password"], PASSWORD_DEFAULT);
			if($_POST["telefono"]!="")
				$telefono="'".$_POST["telefono"]."'";
			else
				$telefono="NULL";
			if($_POST["codfiscale"]!="")
				$codfiscale="'".$_POST["codfiscale"]."'";
			else
				$codfiscale="NULL";
			$sql="INSERT INTO Cliente VALUES ('".$_POST["email"]."', '".$pass."', '".$_POST["nome"]."', '".$_POST["cognome"]."', '".$_POST["localita"]."', '".$_POST["provincia"]."', '".$_POST["indirizzo"]."', '".$_POST["cap"]."', ".$telefono.", ".$codfiscale.")";
			if($mysqli->query($sql)===TRUE)
			{
				echo "La registrazione e' andata a buon fine! Sarai reindirizzato sulla pagina d'accesso.";
				header('Refresh: 3; URL=login.php');
			}
			else
			{
				echo "Registrazione fallita! Sarai reindirizzato sulla pagina di registrazione.";
				header('Refresh: 3; URL=registrazione.php');
			}
		}
		else
		{
			echo "Registrazione fallita! Le password non combaciano. Sarai reindirizzato sulla pagina di registrazione.";
			header('Refresh: 3; URL=registrazione.php');
		}
	?>
</div>
<?php require("footer.php"); ?>
</body>
</html>