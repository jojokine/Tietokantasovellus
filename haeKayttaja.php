<?php
include("yhteys.php");
$kysely = $yhteys->prepare("SELECT * FROM kayttaja WHERE kayttajaid = ?");
  $kysely->execute(array($_SESSION['id']));
  $kayttaja = $kysely->fetchObject();
?>
