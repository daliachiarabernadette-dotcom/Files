<html>
<center>
<?php require("header.php"); ?>
</center>
  <head>
    <title>Negozio di Fumetti</title>
</head>
  <body>
<pre>
</pre>



<?php
$query = " SELECT* FROM Prodotto";


if( isset($_GET["parola"]) and ($_GET["parola"]!=="") )
	    $query .= " WHERE nome LIKE '%{$_GET['parola']}%'";

$result = $mysqli->query($query);		
?>
<h1>
<center><form action="" method="get">
TROVA IL PRODOTTO: <input type="text" name="parola" size="20">
<input type="submit" value="CERCA">
</form></center>
</h1>
<hr>
<?php
echo"<center><table border WIDTH=50%  HEIGHT=50%>";
echo"<tr>";
echo"<th><h1>ID</h1></th>";
echo"<th><h1>NOME</h1></th>";
echo"<th><h1>EDITORE</h1></th>"; 
echo"<th><h1>EDIZIONE</h1></th>";
echo"<th><h1>VOLUME</h1></th>";  
echo"<th><h1>SCRITTORE</h1></th>";                                                             
echo"<th><h1>PREZZO</h1></th>";
echo"<th><h1>DESCRIZIONE</h1></th>";
echo"<th><h1>FOTO</h1></th>";
echo"<th><h1>MODIFICA</h1></th>";
echo"<th><h1>ELIMINA</h1></th>";
echo"<th><h1>AGGIUNGI AL CARRELLO</h1></th>";
echo"</tr>";
while(($row=$result->fetch_assoc())!= NULL)                 
{
echo"<center>";
echo "<tr>\n";	
echo "<td><center><font size='11'>".
$row["id"]."</td><td><center><font size='11'>" . 
$row["nome"]."</td><td><center><font size='11'>" . 
$row["editore"]."</td><td><center><font size='11'>" . 
$row["edizione"]."</td><td><center><font size='11'>" . 
$row["volume"]."</td><td><center><font size='11'>" . 
$row["scrittore"]."</td><td><center><font size='11'>" . 
$row["prezzo"]."</td><td><center>" . 
$row["Descrizione"]."</td><td><center><font size='11'>". 
'<img src="'.$row["smallimg"].'"style="width: 100%">'.'<br><br><br>'.'<a href="scheda_prodotto.php?ID='.$row["id"].'"><button class="productsmall">Scheda</button></a>'.'<br><br><br>'."</center></td><td><center><a style=\"text-decoration: none\" href=\"modifica.php?Salva=0&id=".$row['id']."\">🖊️</a></center></td><td><center><a style=\"text-decoration: none\" href=\"del.php?id=".$row['id']."\"> 🗑️ </a></center>
</td><td><center><font size='11'>".'<a href="index.php?Prodotto='.$row["id"].'"><button class="productsmall"><img src="images.png" style="width:100%"></button></a>'.'<br>'."</center></td><tr>";

/*while(($row = $result->fetch_assoc()) != NULL) {                 
  echo "<tr>"; // Apriamo la riga qui
  echo "<td><center><font size='16'>" . 
  $row["id"] . "</td><td><center><font size='16'>" . 
  $row["Nome"] . "</td><td><center><font size='16'>" . 
  $row["Marca"] . "</td><td><center><font size='16'>" . 
  $row["Prezzo"] . "</td><td><center><font size='5'>" . 
  $row["descrizione"] . "</td>"; 
  echo "<td><center>" . '<img src="' .  $row["Smallimg"] . '" style="width: 100%">' . '<br><br><br>' . '<a href="scheda_prodotto.php?ID=' .  $row["id"] . '"><button class="productsmall">Scheda</button></a>' . '<br><br><br>' . "</center></td>";
  echo "<td><center><a style=\"text-decoration: none\" href=\"modifica.php?Salva=0&id=" . $row["id"] . "\">🖊️</a></center></td><td><center><a style=\"text-decoration: none\" href=\"del.php?id=" . $row["id"] . "\"> 🗑️ </a></center></td>
  <td><center><a href=\"index.php?Prodotto=" . $row["id"] . "\"><button class=\"productsmall\"><img src=\"images.png\" style=\"width:100%\"></button></a><br></center></td>";*/

echo "</tr>";
echo"</center>";
	    
}					
?>
</table></center>
<hr>
<?php require("footer.php");   ?>
</body>
</html>
