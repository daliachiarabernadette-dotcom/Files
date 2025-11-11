<?php
$cognome = $_POST['cognome'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$residenza = $_POST['residenza'];
$numero = $_POST['numero'];
$cartaidentita = $_POST['cartaidentita'];
$codicefiscale = $_POST['codicefiscale'];
$pacchetti = $_POST['pacchetti'];
$destinazione = $_POST['destinazione'];
$date = $_POST['date'];
$preparazione = $_POST['preparazione'];
$personalizzare = $_POST['personalizzare'];
$costo = 0;
$costofinale = 0;

echo "<center><img src='logo.png' width='40%' height='20%'></center>";
echo "<center><h1>Prenota la tua vacanza all'estero perfetta!</h1></center><br><hr><br>";

echo "Gentile Signore/a $cognome $nome ($email / $numero) ha scelto di acquistare il pacchetto:<br>";

echo "$pacchetti <br>";
if ($pacchetti == "Giappone") {
    $costo = 5465;
} elseif ($pacchetti == "Corea Del Sud") {
    $costo = 4986;
} elseif ($pacchetti == "Cina") {
    $costo = 3657;
} elseif ($pacchetti == "Canada") {
    $costo = 6745;
} elseif ($pacchetti == "Messico") {
    $costo = 3865;
}

echo "<br>";

echo "La destinazione scelta è: $destinazione <br>";

echo "<br>";

echo "Il mese scelto è: $date <br>";

echo "<br>";

echo "La preparazione scelta è: $preparazione <br>";

echo "<br>";

echo "Personalizzazione scelta: <br>";
foreach ($personalizzare as $z) {
    echo "$z <br>";
}

echo "<br>";

echo "Prezzo del pacchetto (personalizzazione e preparazione esclusa) è € $costo <br>";

echo "<br>";

echo "Grazie per aver acquistato il pacchetto $pacchetti per $destinazione nel mese di $date.<br>";
echo "Vi verrà inviata una email di conferma su $email e un messaggio per il corso (se aggiunto) su $numero.<br>";

echo "<br>";

if ($destinazione == "Tokyo") {
    echo "<center><img src='tokyo.png' width='100%' height='80%'></center>";
} elseif ($destinazione == "Kyoto") {
    echo "<center><img src='kyoto.png' width='100%' height='80%'></center>";
} elseif ($destinazione == "Seoul") {
    echo "<center><img src='seoul.png' width='80%' height='60%'></center>";
} elseif ($destinazione == "Isoladijeju") {
    echo "<center><img src='isoladijeju.png' width='80%' height='60%'></center>";
} elseif ($destinazione == "Pechino") {
    echo "<center><img src='pechino.png' width='80%' height='60%'></center>";
} elseif ($destinazione == "Shangai") {
    echo "<center><img src='shangai.png' width='80%' height='60%'></center>";
} elseif ($destinazione == "Toronto") {
    echo "<center><img src='toronto.png' width='80%' height='60%'></center>";
} elseif ($destinazione == "Kingston") {
    echo "<center><img src='kingston.png' width='80%' height='60%'></center>";
} elseif ($destinazione == "Cittadelmessico") {
    echo "<center><img src='cittadelmessico.png' width='80%' height='60%'></center>";
} elseif ($destinazione == "Monterrey") {
    echo "<center><img src='monterrey.png' width='80%' height='60%'></center>";
}
?>
