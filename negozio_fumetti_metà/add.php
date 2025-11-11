<html>
  <head>
    <title>Negozio di Fumetti</title>
  </head>
  <body>
<center>
<?php require("header.php"); ?>
</center>
   <form action="insert.php" method="GET"><br>
    <center><h1>INSERIRE IL TITOLO DEL PRODOTTO</h1>
    <input type="text" name="nome"> <br>
   
     <center><h1>INSERIRE L'EDITORE</h1></center><br>
    <select name="editore">
     <option value="PANINI">Panini</option>
     <option value="GPMANGA">GP Manga</option>
     <option value="ITALYCOMICS">Italycomics</option>
     <option value="MARVELITALIA">Marvel Italia</option>
     <option value="NOVAEXPRESS">Nova Express</option>
     <option value="EDIFUMETTO">Edifumetto</option>
     
    </select><br>
	
	<center><h1>INSERIRE L'EDIZIONE</h1></center>
	<input type="text" name="edizione"> <br>
	
	<center><h1>INSERIRE IL VOLUME</h1></center>
	<input type="text" name="volume"> <br>
	
	<center><h1>INSERIRE LO SCRITTORE</h1></center>
	<input type="text" name="scrittore"> <br>
	
  <center><h1>INSERIRE LA DESCRIZIONE</h1></center>
  <textarea name="Descrizione" rows="5" cols="40">
  </textarea>

  <h1>INSERIRE IL PREZZO</h1>
  <input type="text" name="prezzo"> <br>

</center>
<center>    
<h1>CARICHIAMO UN IMMAGINE CHE RAPPRESENTI IL PRODOTTO</h1><br>
<pre>
</pre>
<h1>SCEGLI L'IMMAGINE</h1><input name="immagine" type="file"><br>
<pre>
</pre>
<input type="submit"  value="Inserisci"><br>
</center>
   </form>
<?php require("footer.php");   ?>
  </body>
</html>
