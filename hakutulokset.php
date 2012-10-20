<?php
  require_once('navi.php');
  $haku = $_GET['etsi'];
  $kysely = $yhteys->prepare("SELECT * FROM satama WHERE nimi ILIKE ?");
  $kysely->execute(array("%$haku%"));
?>
<h2>Haun tulokset</h2>
	 <table border>
	<?php while ($rivi = $kysely->fetch())  { ?>
	    <tr>
	    <td> <?php echo $rivi["kayntisatamanumero"] ?> </td>
	    <td> <?php echo $rivi["nimi"] ?> </td>
	    <td> <?php echo $rivi["karttasivu"] ?> </td>
 	    <td> <a href="satamanTiedot.php?satama=<?php echo $rivi["kayntisatamanumero"] ?>">Näytä tiedot!</a> 	    </td>
	    </tr>
	<?php } ?>
   	</table>
 



