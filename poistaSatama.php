<?php 
session_start();
require('onkoKirjauduttu.php'); 
include('haeKayttaja.php');
$satama = $_GET["satama"];

if($kayttaja->admin == 1){
$poisto = $yhteys->prepare("DELETE FROM satama WHERE kayntisatamanumero = ?");
  $poisto->execute(array($satama));
echo "Satama poistettu.";
?>
<head>
<meta http-equiv="refresh" content="2; URL=etusivu.php">
</head>
<?php
exit;
}
else{
echo "Et voi poistaa satamia.";
?>
<head>
<meta http-equiv="refresh" content="2; URL=satamanTiedot.php?satama=<?php echo $satama ?>">
</head>
<?php
exit;

}?>
