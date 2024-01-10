<?php
require_once('db.php');
require_once('Bier.php');

$db = new Database();
$bier = new Bier($db->conn);

if (isset($_GET['naam']) && !empty($_GET['naam'])) {
    $categorieNaam = $_GET['naam'];

    $resultaat = $bier->bierenUitCategorie($categorieNaam);

    if (is_array($resultaat)) {
        echo '<h2>Bieren uit de categorie ' . $categorieNaam . ':</h2>';
        echo '<ul>';
        foreach ($resultaat as $bier) {
            echo '<li>' . $bier['naam'] . '</li>';
        }
        echo '</ul>';
    } else {
        echo '<p>' . $resultaat . '</p>';
    }
} else {
    echo '<p>Geen geldige categorie opgegeven.</p>';
}
?>
