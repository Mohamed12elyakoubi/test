<?php
class Database {
    private $host = "localhost:3306"; //dit is mijn localhost het verschilt als je een andere port gebruikt
    private $gebruikersnaam = "root"; 
    private $wachtwoord = "";
    private $database = "project";

    public $conn;

    public function __construct() {
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->database", $this->gebruikersnaam, $this->wachtwoord);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Verbindingsfout: " . $e->getMessage();
        }
    }
}
?>
