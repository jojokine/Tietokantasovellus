<?php 
  include("yhteys.php");

  $haku = $_GET['satama'];
       
  $kysely = $yhteys->prepare("SELECT * FROM satama WHERE käyntisatamanumero = ?");
  $kysely->execute(array($haku));
  $satama = $kysely->fetch();
?>

<?php require_once('navi.php'); ?>



<div id="satama" style="background-color:#FFFFFF;height:600px;width:1200px;float:left;">
<h2>Sataman tiedot:<h2>
 
<dl>
	<dt>Käyntisatamanumero:</dt>
		<dd><?php echo $satama["käyntisatamanumero"] ?> </dd>
	<dt>Sataman nimi:</dt>
		<dd><?php echo $satama["nimi"] ?> </dd>
	<dt>Karttalehti:</dt>
		<dd><?php echo $satama["karttasivu"] ?> </dd>
	<dt>Kiinnitystapa:</dt>
		<dd><?php echo $satama["kiinnitys"] ?> </dd>
	<dt>Palvelut:</dt>
		<dd><?php echo $satama["palvelut"] ?> </dd>
	<dt>Kotisivu:</dt>
		<dd> </dd><a href="<?php echo $satama["www"] ?>"><?php echo $satama["www"] ?></a>
</dl>

<?php
// $tiedot.="Käyntisatamanumero: ".$rivi["käyntisatamanumero"]. "\n";
// $tiedot.="Sataman nimi: ".$rivi["nimi"]. "\n";
// $tiedot.="Karttasivu: ".$rivi["karttasivu"]. "\n";
// $tiedot.="Kiinnitystapa: ".$rivi["kiinnitys"]. "\n";
// $tiedot.="Palvelut: ".$rivi["palvelut"]. "\n";


// var_dump($satama)
?>
 
 
</div>



</body>
</html>
