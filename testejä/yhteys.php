<?php

try {
    $yhteys = new PDO("pgsql:host=localhost;dbname=jojokine",
                      "jojokine", "Kissa1");
} catch (PDOException $e) {
    die("VIRHE: " . $e->getMessage());
}
$yhteys->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
