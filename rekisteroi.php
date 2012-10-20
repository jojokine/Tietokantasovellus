<?php require_once('navi.php'); ?>

<?php include("yhteys.php"); 

$rekisteroitava = $_POST['kayttajanimi'];
$email = $_POST['sahkoposti'];
$password = $_POST['salasana'];
$password2 = $_POST['salasanaVarm'];

if ($password == $password2 && !empty($email) && !empty($rekisteroitava)){

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
if (empty($email)){
echo "Et syöttänyt sähköpostiosoitettasi!";
?>
		<head>
		<meta http-equiv="refresh" content="2; URL=rekisteroidy.php">
		</head>
		<?php
}
if (empty($rekisteroitava)){
echo "Et syöttänyt käyttäjänimeä!";
?>
		<head>
		<meta http-equiv="refresh" content="2; URL=rekisteroidy.php">
		</head>
		<?php
}

else if ($password != $password2){
echo "Syöttämäsi salasanat eivät täsmänneet!";
?>
		<head>
		<meta http-equiv="refresh" content="2; URL=rekisteroidy.php">
		</head>
		<?php
}
?>
