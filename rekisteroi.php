<?php require_once('navi.php'); ?>

<?php include("yhteys.php"); 

$rekisteroitava = $_POST['kayttajanimi'];
$email = $_POST['sahkoposti'];
$password = $_POST['salasana'];
$password2 = $_POST['salasanaVarm'];

if ($password == $password2){

$encrypted_mypassword = md5($password);


  $rekisterointi = $yhteys->prepare("INSERT INTO kayttaja (username, email, password) VALUES (?, ?, ?);");
  $tila = $rekisterointi->execute(array($rekisteroitava, $email, $encrypted_mypassword));

	if ($tila)
	  { 
		echo "Rekisteröityminen onnistui! Voit nyt kirjautua sisään palveluun!";
		?>
		<head>
		<meta http-equiv="refresh" content="2; URL=kirjaudu.php">
		</head>
		<?php
		}
 	else
	  {
		echo "Rekisteröityminen epäonnistui!";		
		} }

else{
echo "Syöttämäsi salasanat eivät täsmänneet!";
?>
		<head>
		<meta http-equiv="refresh" content="2; URL=rekisteroidy.php">
		</head>
		<?php
}
?>
