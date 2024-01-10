<?php
class Bier {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function alleMerken() {
        $query = $this->conn->prepare("SELECT naam FROM bier WHERE valt_onder_id IS NULL");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function andereBierenVanHetzelfdeMerk($naam) {
        $query = $this->conn->prepare("SELECT naam FROM bier WHERE valt_onder_id = (SELECT id FROM bier WHERE naam = :naam)");
        $query->bindParam(':naam', $naam);
        $query->execute();
        $resultaat = $query->fetchAll(PDO::FETCH_ASSOC);

        if (empty($resultaat)) {
            return "Geen andere bieren gevonden voor $naam.";
        } else {
            return $resultaat;
        }
    }

    public function bierenUitCategorie($categorieNaam) {
        $query = $this->conn->prepare("SELECT bier.naam FROM bier JOIN categorie ON bier.categorie_id = categorie.id WHERE categorie.naam = :categorieNaam");
        $query->bindParam(':categorieNaam', $categorieNaam);
        $query->execute();
        $resultaat = $query->fetchAll(PDO::FETCH_ASSOC);

        if (empty($resultaat)) {
            return "Geen bieren gevonden voor de categorie $categorieNaam.";
        } else {
            return $resultaat;
        }
    }

    public function merkenMetSubmerken() {
        $query = $this->conn->prepare("SELECT bier.naam, COUNT(sub_bier.id) AS aantal_submerken FROM bier LEFT JOIN bier AS sub_bier ON bier.id = sub_bier.valt_onder_id GROUP BY bier.id HAVING aantal_submerken > 0");
        $query->execute();
        $resultaat = $query->fetchAll(PDO::FETCH_ASSOC);

        if (empty($resultaat)) {
            return "Geen merken gevonden met submerken.";
        } else {
            return $resultaat;
        }
    }
}
?>
