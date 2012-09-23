

<!DOCTYPE html>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<html>
<head>

<?php require_once('navi.php'); ?>

<div id="satama" style="background-color:#FFFFFF;height:600px;width:600px;float:left;">
<h2>Sataman tiedot<h2>
 <?php 
  include("yhteys.php");

  $haku = $_POST['satama'];
   // $haku = "Kaunissaari"
   
  $kysely = $yhteys->prepare("SELECT * FROM satama WHERE nimi = '$haku'");
  $kysely->execute();

	echo "<table border>";
	while ($rivi = $kysely->fetch()) {
	    echo "<tr>";
	    echo "<td>" . $rivi["käyntisatamanumero"] . "</td>";
	    echo "<td>" . $rivi["nimi"] . "</td>";
	    echo "<td>" . $rivi["karttasivu"] . "</td>";
	    echo "<td>" . $rivi["kiinnitys"] . "</td>";
	    echo "<td>" . $rivi["palvelut"] . "</td>";
	    echo "</tr>";
	}
//  käyntisatamanumero |    nimi     |           kiinnitys           |              palvelut               | karttasivu 
   echo "</table>";
 
?> 
</div>



</body>
</html>
