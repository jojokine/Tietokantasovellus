<?php
session_start();
include("yhteys.php");

$userName = $_POST['tunnus']; 
$password = $_POST['salasana'];
$encrypted_mypassword = md5($password); 

  $kysely = $yhteys->prepare("SELECT * FROM kayttaja WHERE username = ? AND password = ?");
  $kysely->execute(array($userName, $encrypted_mypassword));
  $kayttaja = $kysely->fetchObject();
 // var_dump($kayttaja);
//die();

if($kayttaja){

    //var_dump($kayttaja->kayttajaid);
    //echo "user logged in";
$_SESSION['id'] = $kayttaja->kayttajaid;
header("location:kirjautuminenOnnistui.php");
}  
else {
    echo "Kirjautuminen epäonnistui! Sinut ohjataan takaisin kirjautumissivulle.";
?>
	<head>
	<meta http-equiv="refresh" content="2; URL=kirjaudu.php">
	</head>
<?php
	
}
?>


