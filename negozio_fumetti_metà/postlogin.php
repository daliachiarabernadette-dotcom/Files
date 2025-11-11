<html>
<head><title>Negozio di Fumetti</title></head>
<?php require("header.php"); ?>
<div class="row center">
	<?php
		if(($_POST["email"]=="")||($_POST["userpassword"]==""))
		{
			echo "Errore! Sarai reindirizzato sulla homepage.";
			header('Refresh: 3; URL=home.php');
			require("footer.php");
			die();
		}
$row = isset($_POST['row'] ) ? $_POST['row'] : ' ';
		$sql="SELECT password FROM Cliente WHERE email='".$_POST["email"]."'";
		$result=$mysqli->query($sql);
if ($result !== false && $result->num_rows > 0)		

		{
			while($row=$result->fetch_assoc())
			{
				if(password_verify($_POST["userpassword"], $password=$row["password"]))
				{
			                $_SESSION["email"]=$_POST["email"];
					header('Refresh: 0; URL=home.php');
				}
				else
				{
					echo "Password errata! Sarai reindirizzato sulla pagina d'accesso.";
					require("footer.php");
					header('Refresh: 3; URL=login.php');
				}
			}
		}
		else
		{
			echo "Email non esistente! Sarai reindirizzato sulla pagina d'accesso.";
			require("footer.php");
                        header('Refresh: 3; URL=login.php');
		}
	?>
</div>
</body>
</html>