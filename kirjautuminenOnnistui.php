<?php
session_start();
if(empty($_SESSION['id'])){
header("location:kirjaudu.php");
}
?>

<html>
<body>
Kirjautuminen onnistui! Sinut ohjataan automaattisesti omalle sivullesi.
<head>
<meta http-equiv="refresh" content="2; URL=omasivu.php">
</head>
</body>
</html>
