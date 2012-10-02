<?php
session_start();
include("yhteys.php");

$userName = $_POST['tunnus']; 
$password = $_POST['salasana']; 

  $kysely = $yhteys->prepare("SELECT * FROM kayttaja WHERE username = ? AND password = ?");
  $kysely->execute(array($userName, $password));
  $kayttaja = $kysely->fetchAll();

if( count($kayttaja) != 1) {
    echo "Kirjautuinen epäonnistui! Sinut ohjatan takaisin kirjautumissivulle.";
?>
	<head>
	<meta http-equiv="refresh" content="2; URL=kirjaudu.php">
	</head>
<?php
	
} else {
    echo "user logged in";
$_SESSION['tunnus'] = $userName;
header("location:kirjautuminenOnnistui.php");
}
?>


