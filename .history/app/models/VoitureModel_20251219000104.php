<?php
    namespace app\models;
    use Flight;
    use PDO;

    class VoitureModel {
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
        }livraisonColis
    }
?>