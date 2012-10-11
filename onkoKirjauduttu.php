<?php 
if(empty($_SESSION['id'])){
echo "Toiminto edellyttää kirjautumista!";
?>
		<head>
		<meta http-equiv="refresh" content="2; URL=kirjaudu.php">
		</head>
<?php 
exit;
}
?>
