<?php
  require_once('navi.php');
include("haeKayttaja.php");
  $haku = $_GET['satama'];
  $kysely = $yhteys->prepare("SELECT * FROM arvostelu WHERE kayntisatamanumero = ?");
  $kysely->execute(array($haku));
?>

<div id="arvostelut" style="background-color:#FFFFFF;height:600px;width:1200px;">

<h4>Sataman saamat arviot:<h4>
	 <table border>
	<?php while ($rivi = $kysely->fetch())  { ?>
	    <tr>
		<th>Arvio</th>
		<th>Kommentti</th>
		<th>Arvioija</th>
	    </tr>
	    <tr>
	    	<td> <?php echo $rivi["tahdet"] ?> </td>
	    	<td> <?php echo $rivi["kommentti"] ?> </td>
		<td> <?php 
			$muok = $yhteys->prepare("SELECT * FROM kayttaja WHERE kayttajaid = ?");
			$muok->execute(array($rivi["kayttajaid"]));
			$muokkaaja = $muok->fetchObject();
			?>
			<a href="kayttaja.php?kayttajaid=<?php echo $muokkaaja->kayttajaid; ?>"><?php echo $muokkaaja->nimi; ?></a>
			<?php
			?> 
		</td>
		<td> <?php
			if($kayttaja->admin == 1 || $kayttaja->kayttajaid == $muokkaaja->kayttajaid){?>
			<a href="poistaArvio.php?arvio=<?php echo $rivi["arvosteluid"]?>">Poista arvio</a>
<?php }?> </td>
 	    </tr>
	<?php } ?>
   	</table>
<a href="satamanTiedot.php?satama=<?php echo $haku ?>">Takaisin sataman tietosivulle</a>
</div>
</body>
</html>
