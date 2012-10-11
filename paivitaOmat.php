<?php
require_once('navi.php');

$nimi = $_POST['nimi'];
$veneentyyppi = $_POST['veneentyyppi'];
$veneennimi = $_POST['veneennimi'];
$veneenpituus = $_POST['veneenpituus'];
$veneensyvays = $_POST['veneensyvays'];
$email = $_POST['email'];
$nayta = $_POST['nayta'];

if(empty($nayta)){
$nayta = "false";
}else{
$nayta = "true";
}


if(empty($email)){
echo "Sähköpostiosoite pitää antaa!";
?>
		<head>
		<meta http-equiv="refresh" content="2; URL=omasivu.php">
		</head>
		<?php
}else{
	$pkid = $kayttaja->kayttajaid;
	$sql = "UPDATE kayttaja SET nimi='$nimi', veneentyyppi='$veneentyyppi', veneennimi='$veneennimi', veneenpituus='$veneenpituus', veneensyvays='$veneensyvays', email='$email', nayta='$nayta' WHERE kayttajaid='$pkid'";
	$paivitys = $yhteys->prepare($sql);
	$tila = $paivitys->execute();

	if ($tila){
		echo "Tietojen päivitys onnistui! Sinut ohjataan omalle sivullesi.";
		?>
		<head>
		<meta http-equiv="refresh" content="2; URL=omasivu.php">
		</head>
		<?php
	}



}

?>
