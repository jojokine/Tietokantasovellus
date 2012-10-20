<?php
session_start();
require('onkoKirjauduttu.php');
include("yhteys.php"); 
include('haeKayttaja.php');

$oldpassword = $_POST['vanhasala'];
$password = $_POST['salasana'];
$password2 = $_POST['salasanaVarm'];

$encrypted_vanhasala = md5($oldpassword);

if ($password == $password2 && $encrypted_vanhasala == $kayttaja->password){

$encrypted_mypassword = md5($password);

	$sql = "UPDATE kayttaja SET password=? WHERE kayttajaid=?";
	$vaihto = $yhteys->prepare($sql);
	$tila = $vaihto->execute(array($encrypted_mypassword, $kayttaja->kayttajaid));

	if ($tila){ 
		echo "Salasanansi on vaihdettu.";
		?>
		<head>
		<meta http-equiv="refresh" content="2; URL=omasivu.php">
		</head>
		<?php
		}
	else{
		echo "Salasanan vaihtaminen ei onnistunut.";
		}

	}
	else if ($encrypted_vanhasala != $kayttaja->password){
	echo "Syöttämäsi vanha salasana oli väärä";
	?>
		<head>
		<meta http-equiv="refresh" content="2; URL=vaihdaSalasana.php">
		</head>
		<?php
	}

	else if ($password != $password2){
	echo "Syöttämäsi uudet salasanat eivät täsmänneet";
	?>
		<head>
		<meta http-equiv="refresh" content="2; URL=rekisteroidy.php">
		</head>
		<?php
	}
	?>
