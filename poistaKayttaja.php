<?php 
session_start();
require('onkoKirjauduttu.php'); 
include('haeKayttaja.php');
$kayttajaid = $_GET["kayttajaid"];

if($kayttaja->admin == 1){
$poisto = $yhteys->prepare("DELETE FROM kayttaja WHERE kayttajaid = ?");
  $poisto->execute(array($kayttajaid));
echo "Käyttäjä poistettu";
?>
<head>
<meta http-equiv="refresh" content="2; URL=etusivu.php">
</head>
<?php
exit;
}
if($kayttajaid == $kayttaja->kayttajaid){
$poisto = $yhteys->prepare("DELETE FROM kayttaja WHERE kayttajaid = ?");
  $poisto->execute(array($kayttajaid));
echo "Käyttäjä poistettu";
?>
<head>
<meta http-equiv="refresh" content="2; URL=kirjauduUlos.php">
</head>
<?php
exit;
}
else{
echo "Et voi poistaa käyttäjää.";
?>
<head>
<meta http-equiv="refresh" content="2; URL=kayttaja.php?kayttajaid=<?php echo $kayttajaid ?>">
</head>
<?php
exit;

}?>
