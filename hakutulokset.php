 <?php
  echo "<h2>Haun tulokset</h2><p>"; 
  include("yhteys.php");

  $haku = $_POST['etsi'];
   
  $kysely = $yhteys->prepare("SELECT * FROM satama WHERE nimi LIKE '$haku'");
  $kysely->execute();

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


