<?php
include("yhteys.php");

$kayntisatamanumero = $_POST["käyntisatamanumero"];
$nimi = $_POST["nimi"];
$kiinnitys = $_POST["kiinnitys"];
$palvelut = $_POST["palvelut"];
$karttasivu  = $_POST["karttasivu"];
$www = $_POST["kotisivu"];

$sql = "INSERT INTO satama (käyntisatamanumero, nimi, kiinnitys, palvelut, karttasivu, www)
        VALUES (?, ?, ?, ?, ?, ?)";
	
$kysely = $yhteys->prepare($sql);
$kysely->execute(array($kayntisatamanumero, $nimi, $kiinnitys, $palvelut, $karttasivu));

?>



