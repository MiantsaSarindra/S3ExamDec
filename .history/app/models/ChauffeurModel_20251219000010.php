<?php
    namespace app\models;
    use Flight;
    use PDO;

    class ChauffeurModel {
        private $db;

        public function __construct($db) {
            $this->db = $db;
        }

        public function getAll() {
            $sql = "SELECT * FROM livraisonChauffeur";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            $chauffeur = [];
        
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $chauffeur[] = [
                    'id' => $row['id'],
                    'nom' => $row['nom']
                ];
            }

            return $chauffeur;
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