<html>
  <head>
    <title>Negozio di Fumetti</title>
  </head>
  <body>
<center>
<?php require("header.php"); ?>
</center>
<?php
                                echo"<center>";
				echo"<br>";
                                echo"<br>";
                                echo"<br>";
                                echo "<H1><br>SCEGLI IL METODO DI PAGAMENTO</H1> <br>";
?>

                                <a href="home.php"><h1>OPPURE TORNA ALL'HOME PAGE</h1></a>
<?php                              
                                echo"<br>";
                                echo '<a href="Contrassegno.php"><button class="menu">Contrassegno</button></a>';
				echo '<a href="Bonifico_bancario.php"><button class="menu">Bonifico bancario</button></a>';
				echo '<a href="https://www.paypal.com/it/webapps/mpp/personal?gclsrc=aw.ds&gclid=EAIaIQobChMI5KeIgoHa6QIVxbTtCh3s_QgYEAAYASABEgLPvvD_BwE&gclsrc=aw.ds"><button class="menu">Paga con Paypal</button></a>';
			        echo '<a href="https://postepay.poste.it/prodotti/postepay-evolution.html?STZ=SRC43&gclid=EAIaIQobChMI14O_9Zvv6QIVDYuyCh07gA3NEAAYASAAEgLoyvD_BwE&gclsrc=aw.ds"><button class="menu">Paga con Postepay</button></a>';
			        echo"</center>"; 
?>
<hr>
<pre>








</pre>
<hr>
<?php require("footer.php"); ?>
</body>
</html>