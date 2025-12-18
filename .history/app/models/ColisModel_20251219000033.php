<?php
    namespace app\models;
    use Flight;
    use PDO;

    class ColisModel {
        private $db;

        public function __construct($db) {
            $this->db = $db;
        }

        public function getAll() {
            $sql = "SELECT * FROM livraisonColis";
            $stmt = $this->db->query($sql);
            $stmt->execute();
            $colis = [];
        
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $colis[] = [
                    'id' => $row['id'],
                    'nom' => $row['nom'],
                    'kg' => $row['kg']
                ];
            }

            return $colis;
        }

        public function getById($id) {
            $sql = "SELECT * FROM livraisonChauffeur WHERE id = :id";
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