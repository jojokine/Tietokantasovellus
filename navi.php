<?php
session_start();
include("yhteys.php");
include("haeKayttaja.php");
?>

<!DOCTYPE html>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<html>
<head>
<style type="text/css">



ul.navi
{
list-style-type:none;
margin:0;
padding:0;
overflow:hidden;
}
ul.navi li
{
float:left;
}
ul.navi a:link,ul.navi a:visited
{
display:block;
width:200px;
height:20px;
font-weight:bold;
font-size:18px;
color:#FFFFFF;
background-color:#000099;
text-align:center;
padding:7px;
text-decoration:none;
text-transform:uppercase;
}

</style>
</head>

<body>
<ul class="navi" >
<li><a href="etusivu.php">Etusivulle</a></li>
<li><a href="lisays.php">Lisäys</a></li>
<li><a href="omasivu.php">Oma Sivu</a></li>
<li><a href="<?php
if(isset($_SESSION['id'])){
echo "kirjauduUlos.php";
}
else{
echo "kirjaudu.php";
}
?>"><?php
if(isset($_SESSION['id'])){
echo "Kirjaudu ulos";
}
else{
echo "Kirjaudu";
}
?></a></li>
<li><div id="etsi" style="background-color:#000099;height:34px;font-weight:bold;font-size:18px;color:#FFFFFF;">
 <form method="GET" action="hakutulokset.php">
 Etsi Satamaa: <input type="text" name="etsi" /> 
 <input type="submit" value="Etsi" />
 </form>
</ul>

<div id="kirj" style="background-color:#FFFFFF;height:50x;width:700px;">
<?php
if(isset($_SESSION['id'])){
echo "Olet kirjautunut käyttäjänä: " . $kayttaja->username . ". ";
}
?>
<h2>Elektroninen Satamakirja</h2>
</div>









