<?php
require_once('db.php');
require_once('Bier.php');

$db = new Database();
$bier = new Bier($db->conn);

if (isset($_GET['naam']) && !empty($_GET['naam'])) {
    $bierNaam = $_GET['naam'];

    $resultaat = $bier->andereBierenVanHetzelfdeMerk($bierNaam);

    if (is_array($resultaat)) {
        echo '<h2>Andere bieren van hetzelfde merk als ' . $bierNaam . ':</h2>';
        echo '<ul>';
        foreach ($resultaat as $bier) {
            echo '<li>' . $bier['naam'] . '</li>';
        }
        echo '</ul>';
    } else {
        echo '<p>' . $resultaat . '</p>';
    }
} else {
    echo '<p>Geen geldige bier naam opgegeven.</p>';
}
?>
