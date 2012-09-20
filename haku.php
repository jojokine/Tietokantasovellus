<?php

// yhteyden muodostus tietokantaan
include("yhteys.php");

// kyselyn suoritus     
$kysely = $yhteys->prepare("SELECT * FROM satama WHERE nimi LIKE'Kaunissaari'");
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

?>
