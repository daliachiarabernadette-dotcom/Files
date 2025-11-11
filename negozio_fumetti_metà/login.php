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
                        <pre>

                        </pre>
			<form action="postlogin.php" method="POST">
			<h1>Modulo di accesso</h1>
			<label class="right">Email:</label><input type="text" maxlength="64" name="email"><br>
			<label class="right">Password:</label><input type="password" name="userpassword"><br>
			<button type="reset" class="form">Cancella</button><button type="submit" class="form">Accedi</button>
			</form>';
		
		}
                     else
		{
			echo "Hai già effettuato il login! Sarai reindirizzato sulla homepage.";
			header('Refresh: 3; URL=home.php');
		}
	?>
<hr>
<pre>











</pre>
</div>
<hr>
<?php require("footer.php"); ?>
</body>
</html>