<?php require_once('navi.php'); ?>

<?php include("yhteys.php"); 

$rekisteroitava = $_POST['kayttajanimi'];
$email = $_POST['sahkoposti'];
$password = $_POST['salasana'];
$password2 = $_POST['salasanaVarm'];


  $rekisterointi = $yhteys->prepare("INSERT INTO kayttaja (username, email, password) VALUES (?, ?, ?);");
	if($rekisterointi->execute(array($rekisteroitava, $email, $password))){ 
		echo "Rekisteröityminen onnistui! Sinut ohjataan automaattisesti omalle sivullesi!";
		sleep(10);
		header("omasivu.php");
		} 
	else{
		echo "Rekisteröityminen epäonnistui!";
		
		}

// var_dump($tila)

	//if ($tila){
	//	echo "Rekisteröityminen onnistui! Sinut ohjataan automaattisesti omalle sivullesi!";
	//	sleep(10);
	//	header("omasivu.php");
	//}



?>
