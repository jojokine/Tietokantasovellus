<?php require_once('navi.php'); ?>

<?php include("yhteys.php"); 

$rekisteroitava = $_POST['kayttajanimi'];
$email = $_POST['sahkoposti'];
$password = $_POST['salasana'];
$password2 = $_POST['salasanaVarm'];


  $rekisterointi = $yhteys->prepare("INSERT INTO kayttaja (username, email, password) VALUES (?, ?, ?);");
  $tila = $rekisterointi->execute(array($rekisteroitava, $email, $password));

	if ($tila)
	  { 
		echo "Rekisteröityminen onnistui! Sinut ohjataan automaattisesti omalle sivullesi!";
		?>
		<head>
		<meta http-equiv="refresh" content="5; URL=omasivu.php">
		</head>
		<?php
		}
 	else
	  {
		echo "Rekisteröityminen epäonnistui!";		
		}
?>
