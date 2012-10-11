<?php 
session_start();
require('onkoKirjauduttu.php'); 
}

include("yhteys.php");

$kayntisatamanumero = $_POST["kayntisatamanumero"];
$nimi = $_POST["nimi"];
$kiinnitys = $_POST["kiinnitys"];
$palvelut = $_POST["palvelut"];
$karttasivu  = $_POST["karttasivu"];
$www = $_POST["kotisivu"];

$kysely = $yhteys->prepare("SELECT * FROM kayttaja WHERE kayttajaid = ?");
  $kysely->execute(array($_SESSION['id']));
  $kayttaja = $kysely->fetchObject();

// var_dump($kayttaja);

$sql = "INSERT INTO satama (kayntisatamanumero, nimi, kiinnitys, palvelut, karttasivu, www, viimeksimuokannutkayttajaid)
        VALUES (?, ?, ?, ?, ?, ?, ?)";


	

if(empty($kayntisatamanumero)){
echo "Käyntisatamanumero on pakollinen tieto!";
?>
		<head>
		<meta http-equiv="refresh" content="2; URL=lisays.php">
		</head>
		<?php
exit;
}
if(empty($nimi)){
echo "Nimi on pakollinen tieto!";
?>
		<head>
		<meta http-equiv="refresh" content="2; URL=lisays.php">
		</head>
		<?php
exit;
}



  $tarkistus = $yhteys->prepare("SELECT * FROM satama WHERE kayntisatamanumero = ?");
  $tarkistus->execute(array($kayntisatamanumero));
  $satama = $tarkistus->fetch();

//var_dump($satama);

if(empty($satama)){
	$kysely = $yhteys->prepare($sql);
	$kysely->execute(array($kayntisatamanumero, $nimi, $kiinnitys, $palvelut, $karttasivu, $www, 		$kayttaja->kayttajaid));
	echo "Lisäys onnistui! Sinut ohjataan sataman tietosivulle.";
	?>
	<head>
	<meta http-equiv="refresh" content="2; URL=satamanTiedot.php?satama=<?php echo "$kayntisatamanumero" ?> ">
	</head>
	<?php
}else{
	echo "Antamallasi käyntisatamanumerolla löytyy jo satama!";
	?>
	<head>
	<meta http-equiv="refresh" content="2; URL=lisays.php">
	</head>
	<?php

}


?>



