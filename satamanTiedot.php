<?php 
  include("yhteys.php");

  $haku = $_GET['satama'];
       
  $kysely = $yhteys->prepare("SELECT * FROM satama WHERE kayntisatamanumero = ?");
  $kysely->execute(array($haku));
  $satama = $kysely->fetch();
?>
<?php require_once('navi.php'); ?>
	<?php
	$muok = $yhteys->prepare("SELECT * FROM kayttaja WHERE kayttajaid = ?");
  	$muok->execute(array($satama["viimeksimuokannutkayttajaid"]));
  	$muokkaaja = $muok->fetchObject();
	?>


<div id="satama" style="background-color:#FFFFFF;height:600px;width:1200px;">
<h3>Sataman tiedot:<h3>
 
<dl>
	<dt>Käyntisatamanumero:</dt>
		<dd><?php echo $satama["kayntisatamanumero"] ?> </dd>
	<dt>Sataman nimi:</dt>
		<dd><?php echo $satama["nimi"] ?> </dd>
	<dt>Karttalehti:</dt>
		<dd><?php echo $satama["karttasivu"] ?> </dd>
	<dt>Kiinnitystapa:</dt>
		<dd><?php echo $satama["kiinnitys"] ?> </dd>
	<dt>Palvelut:</dt>
		<dd><?php echo $satama["palvelut"] ?> </dd>
	<dt>Kotisivu:</dt>
		<dd> <a href="<?php echo $satama["www"] ?>"><?php echo $satama["www"] ?></a> </dd>
	<dt>Viimeisenä sataman tietoja muokannut käyttäjä:</dt>
		<dd><a href="kayttaja.php?kayttajaid=<?php echo $muokkaaja->kayttajaid; ?>"><?php echo $muokkaaja->nimi; ?></a>  </dd>
</dl>
<form method="POST" action="muokkaa.php">
	<input type="hidden" name="satama" value="<?php echo $satama["kayntisatamanumero"] ?>" >
	<input type="submit" value="Muokkaa satamaa" >
</form>
</div>
</body>
</html>
