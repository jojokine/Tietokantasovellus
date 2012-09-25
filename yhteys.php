
<<<<<<< HEAD
try {
    $yhteys = new PDO("pgsql:host=localhost;dbname=jojokine",
                      "jojokine", "Kiss42012");
} catch (PDOException $e) {
    die("VIRHE: " . $e->getMessage());
}
$yhteys->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
=======
>>>>>>> f735a89d3454f318e738879b6b74791e83437a19
