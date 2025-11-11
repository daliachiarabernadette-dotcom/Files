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
			$sql="SELECT password FROM cliente WHERE email='".$_SESSION["email"]."'";
			$result=$mysqli->query($sql);
			if($result->num_rows>0)
			{
				while($row=$result->fetch_assoc())
				{
					if(password_verify($_POST["pass"], $password=$row["password"]))
					{
						if(($_POST["newpass"]!="")||(!isset($_POST["newpass"])))
						{
							$newpass=password_hash($_POST["newpass"], PASSWORD_DEFAULT);
							$sql="UPDATE cliente SET password='".$newpass."' WHERE email='".$_SESSION["email"]."'";
							$mysqli->query($sql);
						}
						if(($_POST["nome"]!="")||(!isset($_POST["nome"])))
						{
				   		$sql="UPDATE cliente SET nome='".$_POST["nome"]."' WHERE email='".$_SESSION["email"]."'";
							$mysqli->query($sql);
						}
						if(($_POST["cognome"]!="")||(!isset($_POST["cognome"])))
						{
							$sql="UPDATE cliente SET cognome='".$_POST["cognome"]."' WHERE email='".$_SESSION["email"]."'";
							$mysqli->query($sql);
						}
						if(($_POST["localita"]!="")||(!isset($_POST["localita"])))
						{
							$sql="UPDATE cliente SET comune='".$_POST["localita"]."' WHERE email='".$_SESSION["email"]."'";
							$mysqli->query($sql);
						}
						if(($_POST["provincia"]!="")||(!isset($_POST["provincia"])))
						{
							$sql="UPDATE cliente SET provincia='".$_POST["provincia"]."' WHERE email='".$_SESSION["email"]."'";
							$mysqli->query($sql);
						}
						if(($_POST["indirizzo"]!="")||(!isset($_POST["indirizzo"])))
						{
							$sql="UPDATE cliente SET indirizzo='".$_POST["indirizzo"]."' WHERE email='".$_SESSION["email"]."'";
							$mysqli->query($sql);
						}
						if(($_POST["cap"]!="")||(!isset($_POST["cap"])))
						{
							$sql="UPDATE cliente SET cap='".$_POST["cap"]."' WHERE email='".$_SESSION["email"]."'";
							$mysqli->query($sql);
						}
						if(($_POST["telefono"]!="")||(!isset($_POST["telefono"])))
						{
							$sql="UPDATE cliente SET telefono='".$_POST["telefono"]."' WHERE email='".$_SESSION["email"]."'";
							$mysqli->query($sql);
						}
						if(($_POST["codfiscale"]!="")||(!isset($_POST["codfiscale"])))
						{
							$sql="UPDATE cliente SET codfiscale='".$_POST["codfiscale"]."' WHERE email='".$_SESSION["email"]."'";
							$mysqli->query($sql);
						}
						echo "Modifica effettuata con successo! Sarai reindirizzato sulla pagina dati.";
						header('Refresh: 3; URL=cliente.php');
					}
					else
					{
						echo "Password errata! Sarai reindirizzato sulla pagina dati.";
						header('Refresh: 3; URL=cliente.php');
					}
				}
			}
		}
	?>
</div>
<?php require("footer.php"); ?>