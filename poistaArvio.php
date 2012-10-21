<?php 
session_start();
require('onkoKirjauduttu.php'); 
include('haeKayttaja.php');
$arvosteluid = $_GET["arvio"];

$kysely = $yhteys->prepare("SELECT * FROM arvostelu WHERE arvosteluid = ?");
  $kysely->execute(array($arvosteluid));
  $arvostelu = $kysely->fetchObject();

if($kayttaja->admin == 1){
$poisto = $yhteys->prepare("DELETE FROM arvostelu WHERE arvosteluid = ?");
  $poisto->execute(array($arvosteluid));
echo "Arvio poistettu";
?>
<head>
<meta http-equiv="refresh" content="2; URL=satamanArvostelut.php?satama=<?php echo $arvostelu->kayntisatamanumero ?>">
</head>
<?php
exit;
}
if($arvostelu->kayttajaid == $kayttaja->kayttajaid){
$poisto = $yhteys->prepare("DELETE FROM arvostelu WHERE arvosteluid = ?");
  $poisto->execute(array($arvosteluid));
echo "Arvio poistettu";
?>
<head>
<meta http-equiv="refresh" content="2; URL=satamanArvostelut.php?satama=<?php echo $arvostelu->kayntisatamanumero ?>">
</head>
<?php
exit;
}
else{
echo "Et voi poistaa arviota";
?>
<head>
<meta http-equiv="refresh" content="2; URL=satamanArvostelut.php?satama=<?php echo $arvostelu->kayntisatamanumero ?>">
</head>
<?php
exit;

}?>
