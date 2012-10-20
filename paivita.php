<?php 
session_start();
require('onkoKirjauduttu.php'); 
include('haeKayttaja.php');

$kayntisatamanumero = $_POST["kayntisatamanumero"];
$nimi = $_POST["nimi"];
$kiinnitys = $_POST["kiinnitys"];
$palvelut = $_POST["palvelut"];
$karttasivu  = $_POST["karttasivu"];
$www = $_POST["www"];

	$sql = "UPDATE satama SET nimi=?, kiinnitys=?, palvelut=?, karttasivu=?, www=?, viimeksimuokannutkayttajaid=? WHERE kayntisatamanumero=?";
	$paivitys = $yhteys->prepare($sql);
	$tila = $paivitys->execute(array($nimi, $kiinnitys, $palvelut, $karttasivu, $www, $kayttaja->kayttajaid, $kayntisatamanumero));

if ($tila){
		echo "Tietojen päivitys onnistui! Sinut ohjataan sataman tietosivulle.";
		?>
		<head>
		<meta http-equiv="refresh" content="2; URL=satamanTiedot.php?satama=<?php echo $kayntisatamanumero ?>">
		</head>
		<?php
	}

?>
