 <?php

 echo "<h2>Haun tulokset</h2><p>"; 
 
 // if ($find == "")  { 
 // echo "<p>Et antanut hakuehtoa!"; 
 // exit; 
 // } 
 
 // $data = "SELECT * FROM satama WHERE upper($field) LIKE'%$find%'"; 

 // $data = pg_query($yhteys ,"SELECT * FROM satama"); 

// yhteyden muodostus tietokantaan
include("yhteys.php");

 $nimi = $_POST['find'];

// kyselyn suoritus     
$kysely = $yhteys->prepare("SELECT * FROM satama WHERE nimi LIKE $nimi");
$kysely->execute();


// haettujen rivien tulostus
echo "<table border>";
while ($rivi = $kysely->fetch()) {
    echo "<tr>";
    echo "<td>" . $rivi["käyntisatamanumero"] . "</td>";
    echo "<td>" . $rivi["nimi"] . "</td>";
    echo "<td>" . $rivi["karttasivu"] . "</td>";
    echo "</tr>";
}
echo "</table>";

// WHERE nimi LIKE'Kaunissaari'
 
// And we display the results 
// while(pg_query($yhteys, $data);) 
// { 
// echo $result['nimi']; 
// echo " "; 
// echo $result['käyntisatamanumero']; 
// echo "<br>"; 
// echo $result['karttasivu']; 
// echo "<br>"; 
// echo "<br>"; 
// } 


 
 //This counts the number or results - and if there wasn't any it gives them a little message explaining that 
// $anymatches=mysql_num_rows($data); //
// if ($anymatches == 0) 
// { 
// echo "Hakuehdoilla ei löytynyt yhtään satamaa<br><br>"; 
// } 
 
// //And we remind them what they searched for 
// echo "<b>Hakusi oli:</b> " .$find; 
// } 
?> 


