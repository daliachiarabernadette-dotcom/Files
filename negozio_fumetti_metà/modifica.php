  <html>
  <head>
<center>
<?php include('header.php'); ?>
</center>
    <title>Negozio di Fumetti</title>
   </head>
  <body>
<?php  

  if ($mysqli->connect_error)
  {
      echo "<center>Connessione fallita</center>";
      exit();
  }
  else
echo"<br>";
echo"<br>";
    if($_GET["Salva"]==1){
      if($_GET["id"]!=NULL){
        $sql = 'Update Prodotto set nome="'.$_POST["nome"].'",editore="'.$_POST["editore"].'",edizione="'.$_POST["edizione"].'",volume="'.$_POST["volume"].'",scrittore="'.$_POST["scrittore"].'",prezzo="'.$_POST["prezzo"].'",Descrizione="'.$_POST["Descrizione"].'" where  id='.$_GET["id"];
        if ($mysqli->query($sql) === TRUE){
         echo "Prodotto salvato con successo";
        }
        else
        {
         echo "Errore nel salvataggio del record";
        }
      }
  	  else{
        $sql = 'Insert into Prodotto (nome,editore,edizione,volume,scrittore,prezzo,Descrizione) values("'.$_POST["nome"].'","'.$_POST["editore"].'","'.$_POST["edizione"].'","'.$_POST["volume"].'","'.$_POST["scrittore"].'","'.$_POST["prezzo"].'","'.$_POST["Descrizione"].'")';
        if ($mysqli->query($sql) === TRUE){
        echo "Record inserito con successo";
        }else{
        echo "Errore nell'inserimento del record";
        }
      }
  	  header('Location: home.php');
  	  $mysqli->close();
  	  exit;
    }
    else{
      

      $id=$_GET["id"];
      if ($id!=NULL)
      {
        $sql = "select  id, nome, editore, edizione, volume, scrittore, prezzo, Descrizione from Prodotto where  id=".$id;
        $result = $mysqli->query($sql);
        $row=$result->fetch_assoc();

        echo '
          <center><h1>MODIFICA FUMETTO</h1></center>
          <center>
          <form action="modifica.php?Salva=1&id='.$id.'" method="post">
          <label for="nome">nome:</label><input type="text" id="nome"  name="nome" value='.$row["nome"].'><br><br>
          <label for="editore">editore:</label><input type="text" id="editore"  name="editore" value='.$row["editore"].'><br><br>
		      <label for="edizione">edizione:</label><input type="text" id="edizione"  name="edizione" value='.$row["edizione"].'><br><br>
		      <label for="volume">volume:</label><input type="text" id="volume"  name="volume" value='.$row["volume"].'><br><br>
		      <label for="scrittore">scrittore:</label><input type="text" id="scrittore"  name="scrittore" value='.$row["scrittore"].'><br><br>
          <label for="prezzo">prezzo:</label><input type="text" id="prezzo"  name="prezzo" value='.$row["prezzo"].'><br><br>
          <label for="Descrizione">Descrizione:</label><input type="text" id="Descrizione"  name="Descrizione" value='.$row["Descrizione"].'><br><br>
         
      	  <input type="submit" value="Salva">
      	   </center></form>';
  	  }else{
        echo '
          <center><h1>INSERISCI FUMETTI</h1>
          <form action="modifica.php?Salva=1&id='.$id.'" method="POST">
          <label for="nome">NOME:</label><input type="text" id="nome"  name="nome"><br><br>
          <label for="editore">EDITORE:</label><input type="text" id="editore"  name="editore"><br><br>
		      <label for="edizione">EDIZIONE:</label><input type="text" id="edizione"  name="edizione"><br><br>
		      <label for="volume">VOLUME:</label><input type="text" id="volume"  name="volume"><br><br>
		      <label for="scrittore">SCRITTORE:</label><input type="text" id="scrittore"  name="scrittore"><br><br>
          <label for="prezzo">PREZZO:</label><input type="text" id="prezzo"  name="prezzo"><br><br>
          <label for="Descrizione">DESCRIZIONE:</label><input type="text" id="Descrizione"  name="Descrizione"><br><br>
           
          <input type="submit" value="Inserisci">
          </center></form>';
        }
    }
    $mysqli->close();
    ?>
<center>
<?php include('footer.php'); ?>
</center>
  </body>
  </html>

