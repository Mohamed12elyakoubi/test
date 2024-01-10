<?php
require_once('db.php');
require_once('Bier.php');

$db = new Database();
$bier = new Bier($db->conn);

$resultaat = $bier->merkenMetSubmerken();

if (is_array($resultaat)) {
    echo '<h2>Bieren met een of meerdere submerken:</h2>';
    echo '<ul>';
    foreach ($resultaat as $merk) {
        echo '<li>' . $merk['naam'] . ' (' . $merk['aantal_submerken'] . ')</li>';
    }
    echo '</ul>';
} else {
    echo '<p>' . $resultaat . '</p>';
}
?>
