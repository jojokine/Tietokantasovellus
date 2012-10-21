<?php require_once('navi.php'); 
require('onkoKirjauduttu.php'); 
  $haku = $_GET['kayttajaid'];
       
  $kysely = $yhteys->prepare("SELECT * FROM kayttaja WHERE kayttajaid = ?");
  $kysely->execute(array($haku));
  $haettavakayttaja = $kysely->fetch();

if(!$haettavakayttaja["nayta"] && $kayttaja->admin != 1){
echo "Käyttäjä on suojannut tietonsa!";
$ref = $_SERVER['HTTP_REFERER'];
header( 'refresh: 2; url='.$ref);
exit;
}

?>



<div id="tiedot" style="background-color:#FFFFFF;height:300px;width:600px;">
<h2>Käyttäjän tiedot:<h2>
 
<dl>
	<dt>Nimi:</dt>
		<dd><?php echo $haettavakayttaja["nimi"] ?> </dd>
	<dt>Veneen tyyppi:</dt>
		<dd><?php echo $haettavakayttaja["veneentyyppi"] ?> </dd>
	<dt>Veneen nimi:</dt>
		<dd><?php echo $haettavakayttaja["veneennimi"] ?> </dd>
	<dt>Veneen pituus:</dt>
		<dd><?php echo $haettavakayttaja["veneenpituus"] ?> </dd>
	<dt>Veneeen syväys:</dt>
		<dd><?php echo $haettavakayttaja["veneensyvays"] ?> </dd>
	<dt>Sähköpostiosoite:</dt>
		<dd> <?php echo $haettavakayttaja["email"] ?> </dd>
</dl>
<?php
			if($kayttaja->admin == 1){?>
			<a href="poistaKayttaja.php?kayttajaid=<?php echo $haettavakayttaja["kayttajaid"]?>">Poista käyttäjä</a>
<?php }?>
</div>
</body>
</html>
