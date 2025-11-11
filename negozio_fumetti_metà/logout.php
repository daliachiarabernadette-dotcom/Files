<?php
echo'<center>';
require("header.php");
echo'</center>';
?>

<div class="row center">
	<?php
                echo"<center>";
		echo"<h1>GRAZIE PER AVER VISITATO IL NOSTRO SITO</h1></br>";
                echo"<h1>ARRIVEDERCI!</h1>";
                echo"</center>";
	?>
</div>
        <?php
	session_destroy();
        echo"<center>";
        echo"</br>";
        echo"<h1>SARAI REINDIRIZZATO SULL'HOME PAGE DEL SITO</h1>";
        echo"</center>";
	header('Refresh: 5; URL=home.php');
        ?>
<pre>








</pre>
<hr>
<center>
<?php include('footer.php'); ?>
</center>