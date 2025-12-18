<?php
    namespace app\models;
    use Flight;
    use PDO;

    class StatutModel {
        private $db;

        public function __construct($db) {
            $this->db = $db;
        }

        public function getAll() {
            $sql = "SELECT * FROM livraisonVoiture";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
        
            $voitures = [];
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $voitures[] = [
                    'id' => $row['id'],
                    'nom' => $row['nom']
                ];
            }

            return $voitures;
        }

        public function getById($id) {
            $sql = "SELECT * FROM livraisonVoiture WHERE id = :id";
            $stmt->bindParam(':id', $id);
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
        
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $chauffeur = [
                    'id' => $row['id'],
                    'nom' => $row['nom']
                ];
            }

            return $chauffeur;
        }
    }
?>