<?php 
include("yhteys.php");
require_once('navi.php');

$haku = $_GET['satama'];
       
$kysely = $yhteys->prepare("SELECT * FROM satama WHERE kayntisatamanumero = ?");
$kysely->execute(array($haku));
$satama = $kysely->fetchObject();

$muok = $yhteys->prepare("SELECT * FROM kayttaja WHERE kayttajaid = ?");
$muok->execute(array($satama->viimeksimuokannutkayttajaid));
$muokkaaja = $muok->fetchObject();
?>


<div id="satama" style="background-color:#FFFFFF;height:300x;width:350px;">
<h4>Sataman tiedot:<h4>
 
<dl>
	<dt>Käyntisatamanumero:</dt>
		<dd><?php echo $satama->kayntisatamanumero ?> </dd>
	<dt>Sataman nimi:</dt>
		<dd><?php echo $satama->nimi ?> </dd>
	<dt>Sijainti:</dt>
		<dd>Lat:<?php echo $satama->lat ?> Lng:<?php echo $satama->lng ?></dd>
	<dt>Karttalehti:</dt>
		<dd><?php echo $satama->karttasivu ?> </dd>
	<dt>Kiinnitystapa:</dt>
		<dd><?php echo $satama->kiinnitys ?> </dd>
	<dt>Palvelut:</dt>
		<dd><?php echo $satama->palvelut ?> </dd>
	<dt>Kotisivu:</dt>
		<dd> <a href="<?php echo $satama->www ?>"><?php echo $satama->www ?></a> </dd>
	<dt>Viimeisenä sataman tietoja muokannut käyttäjä:</dt>
		<dd><a href="kayttaja.php?kayttajaid=<?php echo $muokkaaja->kayttajaid; ?>"><?php echo $muokkaaja->nimi; ?></a>  </dd>
</dl>
</div>

<div id="arvio" style="background-color:#FFFFFF;height:200px;width:350px;">
<form method="POST" action="arvioi.php">
	<legend>Arvioi satamaa antamalla kommentti ja luokitus (5=loistava, 1=huono)</legend>
	<input type="hidden" name="satama" value="<?php echo $satama->kayntisatamanumero ?>" >
	<input type="text" name="kommentti" value="Kommentoi tähän">
	<select name="tahdet">
  		<option value="1">1</option>
  		<option value="2">2</option>
  		<option value="3">3</option>
  		<option value="4">4</option>
		<option value="5">5</option>
	</select>
	<input type="submit" value="Arvostele satama" >
</form>

<a href="satamanArvostelut.php?satama=<?php echo $satama->kayntisatamanumero ?>">Näytä sataman saamat arviot</a>

<form method="POST" action="muokkaa.php">
	<input type="hidden" name="satama" value="<?php echo $satama->kayntisatamanumero ?>" >
	<input type="submit" value="Muokkaa satamaa" >
</form>
</div>
</body>
</html>
