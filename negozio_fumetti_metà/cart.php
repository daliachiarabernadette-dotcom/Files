<?php
echo'<center>';
require 'header.php';
echo'<div class="center title"><a href="index.php" class="title"><h1>PRODOTTI ACQUISTATI</h1></a></div>';
echo'</center>';
?>
<?php
class Item 
{
var $id;
var $nome;
var $editore;
var $edizione;
var $volume;
var $scrittore;  
var $prezzo;
var $Descrizione; 
var $quantita; 
}
?>
<?php
if(isset($_GET["id"])) 
{
$query="SELECT* FROM Prodotto WHERE id=".$_GET["id"];

$result = $mysqli->query($query);

if ($result !== false && $result->num_rows > 0)     
{
while ($Prodotto = $result->fetch_object()) 
{
$item = new Item ();
$item->id = $Prodotto->id;
$item->nome = $Prodotto->nome;
$item->editore = $Prodotto->editore;
$item->edizione = $Prodotto->edizione;
$item->volume = $Prodotto->volume;
$item->scrittore = $Prodotto->scrittore;
$item->prezzo = $Prodotto->prezzo;
$item->Descrizione = $Prodotto->Descrizione;
$item->quantita=1;

$index =0;
if (isset ( $_SESSION ['cart'] )) 
{
$cart = unserialize ( serialize ( $_SESSION ['cart'] ) );
for($i = 0; $i < count ( $cart ); $i ++)
if ($cart [$i]->id == $_GET ['id']) 
{
$index = $i;
break;
}
}
if ($index ==0)
$_SESSION ['cart'] [] = $item;
else {
$cart [$index]->quantita ++;
$_SESSION ['cart'] = $cart;
}
}}}

if (isset ( $_GET ['index'] )) {
$cart = unserialize ( serialize ( $_SESSION ['cart'] ) );
unset ( $cart [$_GET ['index']] );
$cart = array_values ( $cart );
$_SESSION ['cart'] = $cart;
}
?>
<table  width="90%" height="40%" border="3" align="center">
<tr>
<th>ELIMINA</th>
<th>ID</th>
<th>NOME</th>
<th>EDITORE</th>
<th>EDIZIONE</th>
<th>VOLUME</th>
<th>SCRITTORE</th>
<th>PREZZO</th>
<th>DESCRIZIONE</th>
<th>QUANTITA'</th>
<th>SUB TOTALE</th>
</tr>
<?php
$cart = unserialize ( serialize ( $_SESSION ['cart'] ) );
$s = 0;
$index = 0;
for($i = 0; $i < count($cart ); $i ++) {
$s += $cart [$i]->prezzo * $cart [$i]->quantita;
?>
<tr>
<td><center><a href="cart.php?index=<?php echo $index; ?>"
onclick="return confirm('SEI SICURO DI ELIMINARE IL PRODOTTO SELEZIONATO?')">Elimina</a></center></td>
<td><center><?php echo $cart[$i]->id; ?></center></td>
<td><center><?php echo $cart[$i]->nome; ?></center></td>
<td><center><?php echo $cart[$i]->editore; ?></center></td>
<td><center><?php echo $cart[$i]->edizione; ?></center></td>
<td><center><?php echo $cart[$i]->volume; ?></center></td>
<td><center><?php echo $cart[$i]->scrittore; ?></center></td>
<td><center><?php echo $cart[$i]->prezzo; ?></center></td>
<td><center><?php echo $cart[$i]->Descrizione; ?></center></td>
<td><center><?php echo $cart[$i]->quantita; ?></center></td>
<td><center><?php echo $cart[$i]->prezzo * $cart[$i]->quantita; ?></td>
</tr>
<?php
$index ++;
}
?>
<tr>
<td colspan="6" align="right">TOTALE</td>
<td align="center"><?php echo $s; ?></td>
</tr>
</table>
<br>
<center><a href="index.php"><h1>PER FARE ALTRI ACQUISTI TORNA INDIETRO</h1></a></center>
<center>
<?php
                                echo "<form action='compra.php' method='POST'>";
				echo "Modalità spedizione <select name='spedizione'>";
				echo "<option value='Corriere Espresso_9.99'>Corriere Espresso (9,99 Euro)</option>";
				echo "<option value='Ritiro a mano_0'>Ritiro a mano (Gratis)</option>";
				echo "</select>";
				
				echo "<br><button type='submit' class='add'>Completa l'ordine</input>";
				echo "</form>";
?>
</center>
<pre>
</pre>

<hr>

<?php require 'footer.php'; ?>