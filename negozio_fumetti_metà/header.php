<html>
<head>   
<title>Negozio di Fumetti online</title>
<link rel="stylesheet" href="css/styles.css">
<pre>
</pre>
<center> 
<script type="text/javascript">
function startTime()
{
var today=new Date();
var h=today.getHours();
var m=today.getMinutes();
var s=today.getSeconds();
// add a zero in front of numbers<10
m=checkTime(m);
s=checkTime(s);
document.getElementById('txt').innerHTML=h+":"+m+":"+s;
t=setTimeout('startTime()',500);
}
function checkTime(i)
{
if (i<10)
{
i="0" + i;
}
return i;
}
</script>
</center>
</HEAD>
<body>
<center>
<body onload="startTime()">
<div id="txt"></div>  

<font color="RED" size="4"><b><script type="text/JavaScript">
var mydate=new Date()
var year=mydate.getYear()
if (year <1000)
year+=1900
var day=mydate.getDay()
var month=mydate.getMonth()
var daym=mydate.getDate()
if (daym<10)
daym="0"+daym
var dayarray=new Array("Domenica ","Lunedì ","Martedì ","Mercoledì ","Giovedì ","Venerdì ","Sabato ")
var montharray=new Array("/ 01 /","/ 02 /"," / 03 /"," / 04 /","/ 05 /","/ 06 /","/ 07 /","/ 08 /","/ 09 /","/ 10 /","/ 11 /","/ 12 /")
document.write(dayarray[day]+" "+daym+" "+montharray[month]+" "+year)
</script></b></font>  
 </body> 
</CENTER>
</html>
<html>
<body>  	
<?php

session_start();
require 'connessione.php';

                                                     if(!isset($_SESSION["email"]))
						{
                                                       
							echo '<a href="registrazione.php"><button class="menu">Registrati</button></a>';
							echo '<a href="login.php"><button class="menu">Accedi</button></a>';
					        }
						else
						{       echo '<a href="add.php"><button class="menu">Carica nuovi prodotti nel Database</button></a>';
                                                        echo '<a href="home.php"><button class="menu">Home</button></a>';
							echo '<a href="account.php"><button class="menu">Account</button></a>';
							echo '<a href="logout.php"><button class="menu">Esci</button></a>';
						}

?>
<hr>
</body>
</html>			
			
			