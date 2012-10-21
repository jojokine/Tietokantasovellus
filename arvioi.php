<?php 
session_start();
require('onkoKirjauduttu.php'); 
include("yhteys.php");
include("haeKayttaja.php");

$kayntisatamanumero = $_POST["satama"];
$kommentti = $_POST["kommentti"];
$tahdet = $_POST["tahdet"];

$sql = "INSERT INTO arvostelu (kayntisatamanumero, kayttajaid, kommentti, tahdet)
        VALUES (?, ?, ?, ?)";

  $tarkistus = $yhteys->prepare("SELECT * FROM arvostelu WHERE kayttajaid = ? AND kayntisatamanumero =?");
  $tarkistus->execute(array($kayttaja->kayttajaid, $kayntisatamanumero));
  $arvio = $tarkistus->fetch();

//var_dump($satama);

if(empty($arvio)){
	$kysely = $yhteys->prepare($sql);
	$kysely->execute(array($kayntisatamanumero, $kayttaja->kayttajaid, $kommentti, $tahdet));
	echo "Arvio Lisätty! Sinut ohjataan sataman arviosivulle.";
	?>
	<head>
	<meta http-equiv="refresh" content="2; URL=satamanArvostelut.php?satama=<?php echo "$kayntisatamanumero" ?> ">
	</head>
	<?php
}else{
	echo "Olet jo arvioinut sataman!";
	?>
	<head>
	<meta http-equiv="refresh" content="2; URL=satamanArvostelut.php?satama=<?php echo "$kayntisatamanumero" ?> ">
	</head>
	<?php

}


?>



